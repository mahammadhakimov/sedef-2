<?php

namespace Database\Factories;

use App\Models\OpeningHour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OpeningHour>
 */
class OpeningHourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day' => fake()->randomElement([
                'Monday', 'Tuesday', 'Wednesday', 'Thursday',
                'Friday', 'Saturday', 'Sunday',
            ]),
            'opens_at' => '09:00',
            'closes_at' => '20:00',
            'is_closed' => false,
            'sort_order' => fake()->numberBetween(0, 7),
        ];
    }
}
