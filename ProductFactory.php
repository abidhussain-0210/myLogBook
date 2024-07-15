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
            'product_id' => fake()->randomDigit,
            'product_name' => fake()->name,
            'category' => fake()->word,
            'price' => fake()->numberBetween($min = 1000, $max = 9000),
            'quantity' => fake()->numberBetween($min = 10, $max = 50),
            'status' => fake()->randomElement(['ACTIVE' , 'DEACTIVE']),
        ];
    }
}
