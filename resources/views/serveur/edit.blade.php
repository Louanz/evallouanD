@extends('layouts.app')

@section('content')
  <h2>Mise à jour</h2>
  <form action="{{ route('serveur.update', ['serveur' => $serveur->id]) }}" method="post">

    @csrf
    @method('put')

    <div>
      <label for="ip">IP</label>
      <input type="number" name="ip" id="ip" required maxlength="75" value="{{ old('ip', $serveur->ip) }}">
    </div>

    <div>
      <label for="type">Type</label>
      <input type="text" name="type" id="type" required maxlength="75" value="{{ old('type', $serveur->type) }}">
    </div>

    <div>
        <label for="os">OS</label>
        <input type="text" name="os" id="os" required maxlength="75" value="{{ old('os', $serveur->os) }}">
    </div>

    <div>
      <label for="reseau">Reseau</label>
      <select name="reseau_id" id="reseau_id">
        @foreach ($reseau as $reseau)
          <option value="{{ $reseau->id }}" {{ $reseau->reseau_id == $reseau->id ? 'selected' : '' }}>
            {{ $reseau->libelle }}
          </option>
        @endforeach
      </select>
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
