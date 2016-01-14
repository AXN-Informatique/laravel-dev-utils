@extends('layouts.app', [
    'title' => 'Packages'
])

@section('content')

<ul>
    <li><a href="{{ route('docs.packages.composer') }}">Composer</a></li>
    <li><a href="{{ route('docs.packages.bower') }}">Bower</a></li>
</ul>

@endsection
