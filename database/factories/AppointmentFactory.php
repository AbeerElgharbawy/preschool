<?php

namespace Database\Factories;

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
            'guardianName'=>$this->faker->name,
            'guardianEmail' => $this->faker->unique()->safeEmail,
            'childName' =>$this->faker->name,
            'childAge'=>$this->faker->numberBetween(2,14),//
            'message'=>$this->faker->paragraph,
        ];
    }
}
