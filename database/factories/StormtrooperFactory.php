<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stormtrooper>
 */
class StormtrooperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "age" => fake()->numberBetween(18, 35),
            "isActive" => fake()->boolean(),
            "recruited" => fake()->date(),
            "created_by" => 1
        ];
    }
}
