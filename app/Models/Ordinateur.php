<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordinateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_serie',
        'modele',
        'marque',
        'date_mise_en_service',
        'reseau',
    ];

    public function reseau()
    {
        return $this->belongsTo(Reseau::class);
    }
}

