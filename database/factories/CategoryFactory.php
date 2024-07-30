<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ar_name' => $this->faker->word,
            'en_name' => $this->faker->word,
            'ar_description' => $this->faker->text,
            'en_description' => $this->faker->text,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
