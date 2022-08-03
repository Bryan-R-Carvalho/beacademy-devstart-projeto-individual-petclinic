<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Vaccine;

class VaccineFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'brand' => $this->faker->name,
            'quantity' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
