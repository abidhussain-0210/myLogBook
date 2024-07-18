<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => fake()->email,
            'phone_number' => fake()->randomNumber($nbDigits = NULL, $strict = false),
            'address' => fake()->address,
            'state' => fake()->state,
            'country' => fake()->country,
            'language' => fake()->languageCode,
            'image' => 'No Image Found'
        ];
    }
}
