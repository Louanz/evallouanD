@extends('layouts.app')
<br>
<title>@yield('title', 'Ordinateurs')</title>


@section('content')
<br>
<br>
    <a href="{{ route('ordinateur.create') }}" class="btn btn-p-3 mb-2 bg-dark text-white">Ajouter</a>


@endsection
