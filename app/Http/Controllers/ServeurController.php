<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ServeurRepository;
use App\Http\Requests\SereurRequest;
use App\Models\Serveur;
use Illuminate\Http\Request;

class ServeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serveur = Serveur::all();
        return view('serveur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('serveur.create');
    }

    /*
      Store a newly created resource in storage.
     

    public function store(ServeurRequest $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('serveur.index');
    }
    */

    /**
     * Display the specified resource.
     */
    public function show(Serveur $serveur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Serveur $serveur)
    {
        return view('serveur.edit', compact('serveur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServeurRequest $request, Serveur $serveur)
    {
        $this->repository->update($serveur, $request->all());
        return redirect()->route('serveur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serveur $serveur)
    {
        //
    }
}
