<?php

namespace Database\Factories;

use App\Models\Funfact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Funfact>
 */
class FunfactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => 'pe-7s-smile',
            'value' => fake()->numberBetween(20, 2000),
            'title' => fake()->words(2, true),
            'sort_order' => fake()->numberBetween(0, 10),
            'is_active' => true,
        ];
    }
}
