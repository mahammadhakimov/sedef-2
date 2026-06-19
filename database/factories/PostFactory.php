<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(4);

        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'image' => 'site/images/blog/1.jpg',
            'excerpt' => fake()->sentence(15),
            'content' => fake()->paragraphs(3, true),
            'comments_count' => fake()->numberBetween(0, 500),
            'likes_count' => fake()->numberBetween(0, 1000),
            'published_at' => fake()->dateTimeBetween('-1 year'),
        ];
    }
}
