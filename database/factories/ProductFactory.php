<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => fake()->word(),
            'harga' => fake()->numberBetween(1000, 50000),
            'gambar' => 'image/Aqua-300ml.png',
            'stok' => fake()->numberBetween(0, 100),
            'status' => fake()->randomElement(['ada', 'habis'])
        ];
    }
}
