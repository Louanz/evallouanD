<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrdinateursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_serie'=>fake()->word(1000, true),
            'modele'=>fake()->word(),
            'marque'=>fake()->word(),
            'date_mise_en_service'=>fake()->date(),
            'reseau' => function () {
                return factory(App\Models\Reseau::class)->create()->reseau_id;
            }
        ];
    }
}
