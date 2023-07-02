<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cao>
 */
class CaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'raca' => fake()->word(),
            'cor' => fake()->word(),
            'porte' => fake()->word(),
            'data_nascimento' => fake()->date(),
            'sexo' => fake()->randomElement(['m', 'f']), 
        ];
    }
}
