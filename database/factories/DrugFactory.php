<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drug>
 */
class DrugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1,10),
            'ar_name' => $this->faker->word,
            'en_name' => $this->faker->word,
            'ar_description' => $this->faker->text,
            'en_description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'stock' => $this->faker->randomNumber(2),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
