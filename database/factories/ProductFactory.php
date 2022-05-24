<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'short_desc' => $this->faker->text,
            'body' => $this->faker->text,
            'slug' => $this->faker->slug,
            'price' => $this->faker->randomFloat(2, 100, 9000),
            'quantity' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->boolean,
            'category_id' => $this->faker->numberBetween(1, 20),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
