<?php

namespace Axn\LaravelDevUtils;

class Packages
{
    private $composerJsonContent;

    public function getComposerPackages()
    {
        // récupération des packages requis par le projet
        $requiredPackages = $this->getComposerRequiredPackages();

        // récupération des packages requis en dev par le projet
        $requiredDevPackages = $this->getComposerRequiredDevPackages();

        // récupération des packages installés
        $installedPackages = $this->getComposerInstalledPackages();

        // identification des packages installés qui sont requis par composer.json
        // et formatage de quelques informations en vue de l'affichage
        foreach ($installedPackages as $package)
        {
            // is required ?
            $package->required = $package->required_dev = false;

            if (isset($requiredPackages->{$package->name})) {
                $package->required = true;
                $package->version_required = $requiredPackages->{$package->name};
            }
            elseif (isset($requiredDevPackages->{$package->name})) {
                $package->required_dev = true;
                $package->version_required_dev = $requiredDevPackages->{$package->name};
            }

            // split names
            $package->qualified_name = $package->name;

            list($package->vendor, $package->name) = explode('/', $package->qualified_name);

            if (empty($package->description)) {
                $package->description = '';
            }

            if (empty($package->homepage)) {
                $package->homepage = null;
            }

            $package->version = ltrim($package->version,'v');

            $date = carbon($package->time);
            $package->date = $date->format('d/m/Y') . '&nbsp;' . $date->format('H:i');
        }

        // trie des paquets
        usort($installedPackages, function($a, $b){
            //if ($a->required == $b->required) {
                return strcmp($a->name, $b->name);
            //}

            //return $b->required - $a->required;
        });

        // split required from others
        $packages = [
            'required' => [],
            'required_dev' => [],
            'dependencies' => []
        ];

        foreach ($installedPackages as $package) {
            if ($package->required) {
                $packages['required'][] = $package;
            }
            elseif ($package->required_dev) {
                $packages['required_dev'][] = $package;
            }
            else {
                $packages['dependencies'][] = $package;
            }
        }

        $packages['count'] = count($packages['required']) + count($packages['required_dev']) + count($packages['dependencies']);

        return $packages;
    }

    public function getBowerPackages()
    {
        // récupération des packages requis par le projet
        $requiredPackages = $this->getBowerRequiredPackages();

        // en l'état nous n'avons guère plus d'info que le nom et la version
        // car bower ne fournis pas de fichier .lock comme le fait composer
        // il faudrait donc aller parcourir les répertoires de bower_component
        // pour lire les différents fichiers bower.json et récupérer les
        // information détaillées... plus tard...

        return $requiredPackages;
    }

    protected function getComposerRequiredPackages()
    {
        return $this->getComposerJsonContent()->require;
    }

    protected function getComposerRequiredDevPackages()
    {
        return $this->getComposerJsonContent()->{'require-dev'};
    }

    protected function getComposerJsonContent()
    {
        if (null === $this->composerJsonContent)
        {
            $composerFile = base_path('/composer.json');

            if (!file_exists($composerFile)) {
                throw new FileNotFoundException($composerFile);
            }

            $this->composerJsonContent = json_decode(file_get_contents($composerFile));
        }

        return $this->composerJsonContent;
    }

    protected function getComposerInstalledPackages()
    {
        $installedPackages = null;

        $composerLockFile = base_path('/composer.lock');

        if (!file_exists($composerLockFile)) {
            throw new FileNotFoundException($composerLockFile);
        }

        $json = json_decode(file_get_contents($composerLockFile), true);

        // pas très joli mais c'est le résultat d'une évolution des choses qui fait que partout ailleurs
        // on as besoin d'un stdClass et que je n'ai pas réussi mieux que json_decode(json_encode(...))
        // new stdClass($array) ne marche pas
        // (object)$array ne marche pas non plus
        $installedPackages = json_decode(json_encode(
            array_merge_recursive($json['packages'], $json['packages-dev'])
        ));

        return $installedPackages;
    }

    protected function getBowerRequiredPackages()
    {
        $requiredPackages = null;

        $bowerFile = base_path('/bower.json');

        if (!file_exists($bowerFile)) {
            throw new FileNotFoundException($bowerFile);
        }

        $requiredPackages = json_decode(file_get_contents($bowerFile))->dependencies;

        return $requiredPackages;
    }
}
