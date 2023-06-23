<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username'=>fake()->name(),
            'email'=> fake()->unique()->safeEmail(),
            'password'=>bcrypt(fake()->numberBetween(100, 300)),
            'levels' => '1'
        ];
    }
}
