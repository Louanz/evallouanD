<?php

namespace App\Http\Repositories;

use App\Models\Reseau;

class ReseauRepository
{
    protected $reseau;
    public function __construct(Reseau $reseau)
    {
        $this->reseau = $reseau;
    }

    private function save(Reseau $reseau, array $inputs)
    {
        $reseau->libelle = $inputs['libelle'];
        $reseau->lan = $inputs['lan'];
        $reseau->is_disponible = $inputs['is_disponible'];
        $reseau->save();
        return $reseau;
    }

    public function store(array $inputs)
    {
        $reseau = new $this->reseau;
        return $this->save($reseau, $inputs);
    }

    public function update(Reseau $reseau, array $inputs)
    {
        return $this->save($reseau, $inputs);
    }


}
