<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reseaux>
 */
class ReseauxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle'=> fake()->words(5, true),
            'lan'=>fake()->unique()->numberBetween(1, 100),
            'disponibilite'=>fake()->randomElement(['Service', 'Hors service']),
        ];
    }
}
