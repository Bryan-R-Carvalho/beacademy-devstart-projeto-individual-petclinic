<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'postal_code' => $this->faker->postcode(),
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
        ];
    }
}
