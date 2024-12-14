<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $from = fake()->time();
        $to = Carbon::createFromFormat('H:i:s', $from)->addMinutes(30)->format('H:i:s');

        return [
            'from' => $from,
            'to' => $to
        ];
    }
}
