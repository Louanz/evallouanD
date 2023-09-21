<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdinateursController extends Controller
{
    public function __construct()
    {
        $this->middleware();
    }

    public function index()
    {
        $ordinateurs = Ordinateur::all();
        return view('ordinateurs.index', compact('ordinateurs'));
    }

    public function create()
    {
        return view('ordinateurs.create');
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


