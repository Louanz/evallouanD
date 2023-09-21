<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReseauxController extends Controller
{
    public function index()
    {
        $reseaux = Reseau::all();
        return view('reseaux.index', compact('reseaux'));
    }

    public function details(Reseau $reseau)
    {
        return view('reseaux.details', compact('reseau'));
    }

}
