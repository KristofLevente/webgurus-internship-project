<?php

namespace Database\Factories;

use App\Models\Appointment;
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
        $appointment_date_begin = $this->faker->dateTimeBetween('-24 month', '-12 month');
        $appointment_date_end = (clone $appointment_date_begin)->modify('+1 hour');

        return [
            'service_type' => $this->faker->randomElement(['Radiografie','RMN','analiza de sange','analiza medicala']),
            'appointment_date_begin' => $appointment_date_begin->format('Y-m-d-H:i'),
            'appointment_date_end' => $appointment_date_end->format('Y-m-d-H:i'),
            'appointment_type' => $this->faker->randomElement(['online','local']),
            'status' => $this->faker->randomElement(['pending', 'accepted', 'declined' ]),
        ];
    }
}
