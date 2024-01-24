<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name,
            'subject' =>fake()->name,
            'image'=>fake()->imageUrl(640,480,'animals',true),
            'published'=>fake()->numberBetween(0,1),
            'facebook' => $this->faker->unique()->safeEmail,
            'twitter' => $this->faker->unique()->safeEmail,
            'instagram' => $this->faker->unique()->safeEmail,
        ];
    }
}
