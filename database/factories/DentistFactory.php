<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dentist>
 */
class DentistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'specialization' => fake()->jobTitle(),
            'license_number' => fake()->numberBetween(10000000, 99999999),
            'contact_number' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'password' => Hash::make('password'),
        ];
    }
}
