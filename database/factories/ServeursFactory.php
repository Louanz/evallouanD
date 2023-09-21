<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServeursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ip'fake()->word(),
            'type'=>fake()->randomElement(['Site Web', 'Base de données', 'Applications']),
            'os'=>fake()->word(),
            'reseau' => function () {
                return factory(App\Models\Reseau::class)->create()->reseau_id;
            }

        ];
    }
}
