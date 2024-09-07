<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dress>
 */
class DressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->realText(20),
            'description' => $this->faker->paragraph(5),
            'price' => $this->faker->numberBetween(100,200),
            'active' => 1
        ];
    }
}
