@extends('layouts.app', [
    'title' => 'Packages'
])

@section('content')

<ul>
    <li>
        <a href="{{ route('dev-utils:packages.index') }}">Packages</a>
        <ul>
            <li><a href="{{ route('dev-utils:packages.composer') }}">Composer</a></li>
            <li><a href="{{ route('dev-utils:packages.bower') }}">Bower</a></li>
        </ul>
    </li>
</ul>

@endsection
