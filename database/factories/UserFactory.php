<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->creditCardNumber(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'gender' => $this->faker->randomElement($array = array('L', 'P')),
            'phone' => $this->faker->phoneNumber(),
            'position' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'address' => $this->faker->address()
        ];
    }
}
