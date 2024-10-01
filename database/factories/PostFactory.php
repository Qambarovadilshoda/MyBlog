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
        return [
            'user_id' => 2,
            'title' => fake()->sentence(),
            'category_id' => fake()->randomElement([1, 2, 3, 4, 5]),
            'short_content' => fake()->paragraph(3),
            'context' => fake()->paragraph(15),
        ];
    }
}
