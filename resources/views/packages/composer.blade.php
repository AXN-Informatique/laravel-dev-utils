@extends('layouts.app', [
    'title' => 'Packages Composer'
])

@section('content')

<div class="alert alert-info">
    <p>Les listes ci-dessous sont générées dynamiquement à partir des fichiers <code>composer.json</code> et
     <code>composer.lock</code>.</p>
     <p>Si vous modifiez les dépendances de l’application ces listes seront automatiquement
     mises à jours afin de refléter votrez installation.</p>
</div>

 <p>Il y a un total de <strong>{{ $packages['count'] }}</strong> packages d’installés.</strong>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Packages requis par l’application
        <span class="badge pull-right">{{ count($packages['required']) }}</span></h3>
    </div>
    <div class="panel-body">
        <p>Liste des packages de l’application, c’est à dire les packages requis (<code>"require"</code>)
        dans le fichier <code>composer.json</code> de l’aplication.</p>
    </div>
    <div class="responsive-table">
        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th scope="col" class="text-nowrap">Nom</th>
                    <th scope="col" class="text-nowrap">Description</th>
                    <th scope="col" class="text-nowrap">Page web</th>
                    <th scope="col" class="text-nowrap">Version requise</th>
                    <th scope="col" class="text-nowrap">Version installée</th>
                    <th scope="col" class="text-nowrap">Date de la version</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages['required'] as $package)
                <tr>
                    <td class="text-nowrap">
                        <h4>
                            {{ $package->name }}<br>
                            <small>{{ $package->qualified_name }}</small>
                        </h4>
                    </td>
                    <td>{{ $package->description }}</td>
                    <td class="text-center">
                        @if ($package->homepage)
                            <a href="{{ $package->homepage }}" target="blank"><i class="fa fa-external-link"></i></a>
                        @endif
                    </td>
                    <td class="text-right">{{ $package->version_required }}</td>
                    <td class="text-right">{{ $package->version }}</td>
                    <td class="text-right">{{ $package->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- responsive-table -->
</div><!-- .panel -->

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Packages requis en développement par l’application
        <span class="badge pull-right">{{ count($packages['required_dev']) }}</span></h3>
    </div>
    <div class="panel-body">
        <p>Liste des packages de developpement de l’application, c’est à dire les packages requis
        pour le développement (<code>"require-dev"</code>) dans le fichier <code>composer.json</code> de l’aplication.</p>
    </div>
    <div class="responsive-table">
        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th scope="col" class="text-nowrap">Nom</th>
                    <th scope="col" class="text-nowrap">Description</th>
                    <th scope="col" class="text-nowrap">Page web</th>
                    <th scope="col" class="text-nowrap">Version requise</th>
                    <th scope="col" class="text-nowrap">Version installée</th>
                    <th scope="col" class="text-nowrap">Date de la version</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages['required_dev'] as $package)
                <tr>
                    <td class="text-nowrap">
                        <h4>
                            {{ $package->name }}<br>
                            <small>{{ $package->qualified_name }}</small>
                        </h4>
                    </td>
                    <td>{{ $package->description }}</td>
                    <td class="text-center">
                        @if ($package->homepage)
                            <a href="{{ $package->homepage }}" target="blank"><i class="fa fa-external-link"></i></a>
                        @endif
                    </td>
                    <td class="text-right">{{ $package->version_required_dev }}</td>
                    <td class="text-right">{{ $package->version }}</td>
                    <td class="text-right">{{ $package->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- responsive-table -->
</div><!-- .panel -->

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Autres packages installés
        <span class="badge pull-right">{{ count($packages['dependencies']) }}</span></h3>
    </div>
    <div class="panel-body">
        <p>Liste des autres packages de l’application.Ces packages sont des dépendances
        des packages requis par l’application.</p>
    </div>
    <div class="responsive-table">
        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th scope="col" class="text-nowrap">Nom</th>
                    <th scope="col" class="text-nowrap">Description</th>
                    <th scope="col" class="text-nowrap">Page web</th>
                    <th scope="col" class="text-nowrap">Version installée</th>
                    <th scope="col" class="text-nowrap">Date de la version</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages['dependencies'] as $package)
                <tr>
                    <td class="text-nowrap">
                        <h4>
                            {{ $package->name }}<br>
                            <small>{{ $package->qualified_name }}</small>
                        </h4>
                    </td>
                    <td><p>{{ $package->description }}</p></td>
                    <td class="text-center">
                        @if ($package->homepage)
                            <a href="{{ $package->homepage }}" target="blank"><i class="fa fa-external-link"></i></a>
                        @endif
                    </td>
                    <td class="text-right">{{ $package->version }}</td>
                    <td class="text-right">{{ $package->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- responsive-table -->
</div><!-- .panel -->

@endsection
