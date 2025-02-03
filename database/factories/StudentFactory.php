<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(18, 30),
            'birth'=>fake()->date(),
            'address'=>fake()->address(),
            'is_final_year'=>fake()->boolean(),
        ];
    }
}
