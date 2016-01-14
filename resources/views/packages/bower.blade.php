@extends('layouts.app', [
    'title' => 'Packages Bower'
])

@section('content')

<div class="alert alert-info">
    <p>La liste ci-dessous est générée dynamiquement à partir du fichiers <code>bower.json</code>.</p>
     <p>Si vous modifiez les dépendances de l’application cette liste sera automatiquement
     mise à jours afin de refléter votrez installation.</p>
</div>

<ul>
@foreach ($packages as $name => $version)
    <li>{{ $name }} - {{ $version }}</li>
@endforeach
</ul>

@endsection
