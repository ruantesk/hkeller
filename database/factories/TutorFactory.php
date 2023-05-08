<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tutor>
 */
class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // telefone
        $telepart1 = fake()->randomNumber(5);
        $telepart2 = fake()->randomNumber(6);
        return [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->streetAddress(),
            'telefone' => $telepart1 . $telepart2,
        ];
    }
}
