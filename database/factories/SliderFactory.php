<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'site/images/bg/bg27.jpg',
            'pre_title' => fake()->words(2, true),
            'title' => fake()->sentence(3),
            'description' => fake()->sentence(12),
            'button_text' => 'View Details',
            'button_link' => '#',
            'sort_order' => fake()->numberBetween(0, 10),
            'is_active' => true,
        ];
    }
}
