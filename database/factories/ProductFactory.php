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
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2, 8)),
            'desc' => $this->faker->paragraph(mt_rand(2, 4)),
            'type' => $this->faker->sentence(mt_rand(1, 2)),
            'stock' => mt_rand(1, 50),
            'price' => mt_rand(1000, 100000),
            'last_update' => now()
        ];
    }
}
