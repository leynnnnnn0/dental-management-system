<?php

namespace Database\Seeders;

use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        Patient::factory()->create([
            'first_name' => 'Jashreil',
            'last_name' => 'Almoguera',
            'contact_number' => '09844330323',
            'email' => 'jashreil@gmail.com'
        ]);

        Dentist::factory()->create([
            'first_name' => 'Nathaniel',
            'last_name' => 'Alvarez',
            'contact_number' => '09844342323',
            'email' => 'nathaniel@gmail.com',
            'specialization' => 'teeth',
            'license_number' => '4324234234234',
            'password' => 'password'
        ]);

        Schedule::factory()->create([
            'timeslot' => '8:00 - 9:00'
        ]);
    }
}
