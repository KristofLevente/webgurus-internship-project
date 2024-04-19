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
        $appointment_date_begin = $this->faker->dateTimeBetween('-29 month', '-17 month');
        $appointment_date_end = (clone $appointment_date_begin)->modify('+1 hour');

        return [
            'service_type' => $this->faker->randomElement(['Radiografie','RMN','analiza de sange','analiza medicala']),
            'date_begin' => $appointment_date_begin->format('Y-m-d-H:i'),
            'date_end' => $appointment_date_end->format('Y-m-d-H:i'),
            'type' => $this->faker->randomElement(['online','local']),
            'status' => $this->faker->randomElement(['pending', 'accepted', 'declined' ]),
        ];
    }
}
