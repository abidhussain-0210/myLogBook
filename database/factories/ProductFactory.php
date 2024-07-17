<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blog_title' => fake()->name,
            'blog_category' => fake()->word,
            'blog_tags' => fake()->text($maxNbChars = 20),
            'description' => fake()->text($maxNbChars = 400),
            'image' => 'No Image Found',
            'status' => fake()->randomElement(['ACTIVE' , 'DEACTIVE']),
        ];
    }
}
