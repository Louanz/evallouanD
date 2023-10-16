<?php

namespace Database\Seeders;

use App\Models\Ordinateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdinateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ordinateur::factory()
            ->count(20)
            ->create();
    }
}
