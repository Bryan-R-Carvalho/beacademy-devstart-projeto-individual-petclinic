<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Owner;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postal_code' => $this->faker->postcode(),
            'district' => $this->faker->city(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'state' => $this->faker->state(),
            'owner_id' => Owner::All()->random()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
