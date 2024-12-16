<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'income_day_deposited' => fake()->numberBetween(1, 31),
            'income_description' => fake()->word(),
            'income_amount' => fake()->numberBetween(100, 4000),

            'budget_description' => fake()->word(),
            'budget_amount' => fake()->numberBetween(10, 100),
        ];
    }
}
