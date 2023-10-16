@extends('layouts.app')
<br>
<title>@yield('title', 'Reseaux')</title>

@section('content')
<br>
<br>
    <a href="{{ route('reseau.create') }}" class="btn btn-p-3 mb-2 bg-dark text-white">Ajouter</a>

    <ul>
    @forelse ($reseaux as $reseau)
      <li>
        <div class="mb-2" class="p-3 mb-2 bg-info text-white">
          {{ $reseau->libelle }} [lan : {{ $reseau->lan }}] [disponible : {{ $reseau->is_disponible}}]

          @cannot('reseau-update')
            <a href="{{ route('reseau.edit', ['reseau' => $reseau->id]) }}" class="btn btn-sm btn-warning">Modifier</a>
          @endcannot

        </div>
      </li>

      <td>
        <form method="POST" action="{{ route('reseau.destroy',
            ['reseau' => $reseaus->id]) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-outline-danger btn-xs">
                Supprimer</button>
        </form>

        <a href="{{ route('reseau.edit', ['reseau' => $reseaus->id]) }}"
        class="btn btn-outline-warning btn-xs">Modifier</a><br><br>
    </td>

    @empty
      <li>
        Aucune matière connue
      </li>
    @endforelse
  </ul>

@endsection


