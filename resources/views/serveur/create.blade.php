@extends('layouts.app')
<br>
@section('content')
<br>
  <h2>Création</h2>

  <form action="{{ route('serveur.store') }}" method="post" >

    @csrf

    <div>
      <label for="ip">Adresse IP</label></br>
      <input type="number" name="ip" id="ip" required value="{{ old('ip') }}" maxlength="75">
    </div></br>

    <div>
      <label for="type">Type</label></br>
      <input type="text" name="type" id="type" required value="{{ old('type') }}" maxlength="75">
    </div></br>

    <div>
      <label for="os">OS</label></br>
      <input type="text" name="os" id="os" required value="{{ old('os') }}">
    </div></br>


    <div>
      <label for="reseau">Reseau</label>
      <select name="reseau_id" id="reseau_id">

       </select>

    </div></br>

    <div>
      <input type="submit" value="Valider" class="btn btn-p-3 mb-2 bg-dark text-white">
    </div>

  </form>
@endsection
