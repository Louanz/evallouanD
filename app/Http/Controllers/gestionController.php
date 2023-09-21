<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gestionController extends Controller
{
    public function listeOrdinateurs()
    {
        $ordinateurs = Ordinateur::all();
    return view('ordinateurs.index', compact('ordinateurs'));

    }

    public function createOrdinateur()
    {
        return view('ordinateur.index');

 }

    public function updateOrdinateur(Request $request, $id)
    {
        return redirect()->route('ordinateurs.details', ['ordinateur' => $ordinateur->id])
        ->with('success', 'Votre ordinateur a été mis à jour avec succès.');
    }

    public function deleteOrdinateur($id)
    {
        $ordinateur->delete();

        return redirect()->route('ordinateurs.index')->with('success', 'Ordinateur supprimé ');
    }



}
