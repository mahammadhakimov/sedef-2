<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'service' => fake()->randomElement([
                'Orthopaedics', 'Cardiology', 'Neurology', 'Dental',
                'Haematology', 'Blood Test', 'Emergency Care',
                'Outdoor Checkup', 'Cancer Service', 'Pharmacy',
            ]),
            'reservation_date' => fake()->dateTimeBetween('now', '+1 month'),
            'message' => fake()->sentence(12),
            'status' => 'pending',
        ];
    }
}
