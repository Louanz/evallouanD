<?php

namespace Database\Seeders;

use App\Models\Reseau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReseauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reseau::factory()
            ->count(20)
            ->create();
    }
}
