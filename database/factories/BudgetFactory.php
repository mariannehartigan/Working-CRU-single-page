<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->randomElement(['groceries', 'miscellaneous', 'gas', 'personal budget', 'school expenses']),
            'amount' => fake()->numberBetween(10, 400),
            'frequency' => fake()->randomElement(['Weekly', 'Monthly', 'Quarterly', 'Yearly']),
        ];
    }
}
