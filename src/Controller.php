<?php

namespace Axn\LaravelDevUtils;

use App\Http\Controllers\Controller as BaseController;
use Axn\LaravelDevUtils\Packages;

class Controller extends BaseController
{
    /**
     * Shows the packages page.
     *
     * @return \Illuminate\View\View
     */
    public function packages(Packages $packages)
    {
        return view('dev-utils::packages.index');
    }

    /**
     * Shows the composer packages page.
     *
     * @return \Illuminate\View\View
     */
    public function packagesComposer(Packages $packages)
    {
        return view('dev-utils::packages.composer', [
            'packages' => $packages->getComposerPackages()
        ]);
    }

    /**
     * Shows the bower packages page.
     *
     * @return \Illuminate\View\View
     */
    public function packagesBower(Packages $packages)
    {
        return view('dev-utils::packages.bower', [
            'packages' => $packages->getBowerPackages()
        ]);
    }
}
