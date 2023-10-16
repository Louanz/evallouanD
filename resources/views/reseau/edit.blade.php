@extends('layouts.app')

@section('content')
  <h2>Mise à jour</h2>
  <form action="{{ route('reseau.update', ['reseau' => $reseau->id]) }}" method="post">

    @csrf
    @method('put')

    <div>
      <label for="libelle">Libellé</label>
      <input type="text" name="libelle" id="libelle" required maxlength="75" value="{{ old('libelle', $reseau->libelle) }}">
    </div>

    <div>
      <label for="lan">LAN</label>
      <input type="text" name="lan" id="lan" required maxlength="75" value="{{ old('lan', $reseau->lan) }}">
    </div>

    <div>
      <label for="is_disponible">Disponibilité</label>
      <input type="boolean" name="is_disponible" id="is_disponible" required value="{{ old('is_disponible', $reseau->is_disponible) }}">
    </div>



    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
