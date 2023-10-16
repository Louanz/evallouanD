<?php

namespace App\Http\Repositories;

use App\Models\Ordinateur;

class OrdinateurRepository
{
    protected $ordinateur;
    public function __construct(Ordinateur $ordinateur)
    {
        $this->ordinateur = $ordinateur;
    }

    private function save(Ordinateur $ordinateur, array $inputs)
    {
        $ordinateur->num_serie = $inputs['num_serie'];
        $ordinateur->modele = $inputs['modele'];
        $ordinateur->marque = $inputs['marque'];
        $ordinateur->reseau = $inputs['reseau'];
        $ordinateur->save();
        return $ordinateur;
    }

    public function store(array $inputs)
    {
        $ordinateur = new $this->ordinateur;
        return $this->save($ordinateur, $inputs);
    }

    public function update(Ordinateur $ordinateur, array $inputs)
    {
        return $this->save($ordinateur, $inputs);
    }


}
