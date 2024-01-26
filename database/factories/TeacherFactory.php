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
            'name'=>$this->faker->name,
            'subject' =>$this->faker->name,
            'image'=>$this->faker->imageUrl(640,480,'animals',true),
            'published'=>$this->faker->numberBetween(0,1),
            'facebook' => $this->faker->unique()->safeEmail,
            'twitter' => $this->faker->unique()->safeEmail,
            'instagram' => $this->faker->unique()->safeEmail,
        ];
    }
}
