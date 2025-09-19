<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'content' => fake()->paragraph(3),
            'user_id' => 1,
            'slug' => str($title)->slug(),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'category_id' => 1,
        ];
    }
}
