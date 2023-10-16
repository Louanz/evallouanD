<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reseau;


class AccueilController extends Controller
{
    public function index()
    {
        $reseaux = Reseau::withCount('serveurs', 'ordinateurs')->get();

        return view('accueil', compact('reseau'));
    }
}
