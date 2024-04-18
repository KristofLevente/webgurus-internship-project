<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = User::where('role', 'medic')->firstOrFail();

        $users->each(function ($user) {

            $patients = Patient::factory()->count(150)->create(['user_id' => $user->id]);

            $patients->map(function ($patient) use ($user) {
                $user->patients()->attach($patient->id);
            });

            $patients->map(function ($patient) {
                Appointment::factory()->count(2)->create(['user_id' => $patient->user_id, 'patient_id' => $patient->id]);
            });

        });
    }
}
