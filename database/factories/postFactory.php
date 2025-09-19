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
            'title' => $title, // sentence of 3 words
            'content' => fake()->paragraph(3), // 3 paragraphs
            'user_id' => 1, // 1 is the id of the user
            //'slug' => str()->slug($title), // slug of the title
            'image' => fake()->imageUrl(640, 480, 'animals', true), // image url
            'status' => 'published', // published or draft
            'category_id' => 1, // 1 is the id of the category
             

            //
        ];
    }
}
