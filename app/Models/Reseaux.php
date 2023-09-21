<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseaux extends Model
{
    use HasFactory;


    protected $fillable = [
        'libelle',
        'lan',
        'disponibilite',
    ];

    public function ordinateurs()
    {
        return $this->hasMany(Ordinateur::class);
    }

    public function serveurs()
    {
        return $this->hasMany(Serveur::class);
    }

}
