<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DressSize>
 */
class DressSizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dress_id' => $this->faker->unique()->numberBetween(1, 20),
            'size_id' => $this->faker->unique()->numberBetween(1, 3),
            'active' => 1
        ];
    }
}
