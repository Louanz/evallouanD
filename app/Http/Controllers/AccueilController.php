<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $reseaux = Reseau::withCount('serveurs', 'ordinateurs')->get();

        return view('accueil', compact('reseaux'));
    }
}
