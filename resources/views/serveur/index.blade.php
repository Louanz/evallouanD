@extends('layouts.app')
<br>
<title>@yield('title', 'Serveurs')</title>

@section('content')
<br>
<br>
    <a href="{{ route('serveur.create') }}" class="btn btn-p-3 mb-2 bg-dark text-white">Ajouter</a>



@endsection
