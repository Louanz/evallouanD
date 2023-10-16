<?php

namespace Database\Seeders;

use App\Models\Serveur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Serveur::factory()
        ->count(20)
        ->create();
    }
}
