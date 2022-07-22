<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Owner;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'species' => $this->faker->randomElement(['dog', 'cat', 'bird']),
            'owner_id' => Owner::All()->random()->id,
            'age' => $this->faker->numberBetween(1, 100),
            'breed' => $this->faker->randomElement(['labrador', 'poodle', 'chihuahua']),
            'color' => $this->faker->randomElement(['black', 'white', 'brown']),
            'hair_type' => $this->faker->randomElement(['short', 'long', 'curly']),
            'weight' => $this->faker->randomFloat(2, 0, 100),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
