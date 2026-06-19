<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Funfact;
use App\Models\OpeningHour;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Slider::factory(3)->create();
        Service::factory(6)->create();
        Doctor::factory(4)->create();
        Funfact::factory(4)->create();
        Department::factory(8)->create();
        Post::factory(3)->create();

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($days as $index => $day) {
            OpeningHour::factory()->create([
                'day' => $day,
                'sort_order' => $index,
            ]);
        }
    }
}
