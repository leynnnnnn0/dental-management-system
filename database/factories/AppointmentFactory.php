<?php

namespace Database\Factories;

use Carbon\Carbon;
use Date;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => fake()->numberBetween(1, 10),
            'dentist_id' => fake()->numberBetween(1, 10),
            'schedule_id' => fake()->numberBetween(1, 5),
            'date' => Carbon::today()->addDays(fake()->numberBetween(1, 30))->format('Y-m-d'),
            'appointment_number' => "AN-" . fake()->numberBetween(00000, 99999),
            'concern' => fake()->sentence(),
            'status' => fake()->randomElement([
                'cancelled',
                'declined',
                'pending',
                'approved',
                'completed'
            ])
        ];
    }
}
