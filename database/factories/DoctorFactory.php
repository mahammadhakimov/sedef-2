<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Dr. '.fake()->name(),
            'position' => fake()->randomElement(['Cardiology', 'Neurology', 'Dental', 'Orthopaedics']),
            'description' => fake()->sentence(10),
            'image' => 'site/images/team/team8.jpg',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'google_plus_url' => '#',
            'sort_order' => fake()->numberBetween(0, 10),
            'is_active' => true,
        ];
    }
}
