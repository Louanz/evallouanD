<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServeursController extends Controller
{
    public function index()
    {
        $serveurs = Serveur::all();
        return view('serveurs.index', compact('serveurs'));
    }

    public function create()
    {
        return view('serveurs.create');
    }


    public function edit(Serveur $serveur)
    {
        return view('serveurs.edit', compact('serveur'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('ordinateurs.details', ['ordinateur' => $ordinateur->id])
        ->with('success', 'Votre ordinateur a été mis à jour avec succès.');
    }

    public function delete($id)
    {
        $ordinateur->delete();

        return redirect()->route('ordinateurs.index')->with('success', 'Ordinateur supprimé ');
    }


}

