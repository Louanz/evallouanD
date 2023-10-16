<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ReseauRepository;
use App\Https\Requests\ReseauRequest;
use App\Models\Reseau;
use Illuminate\Http\Request;

class ReseauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reseaux = Reseau::all();
        return view('reseau.index', compact('reseaux'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reseau.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->repository->store($request->all());
        return redirect()->route('reseau.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reseau $reseau)
    {
        return view('reseau.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reseau $reseau)
    {
        return view('reseau.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reseau $reseau)
    {
        $this->repository->update($reseau, $request->all());
        return redirect()->route('reseau.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reseau $reseau)
    {
        //
    }
}
