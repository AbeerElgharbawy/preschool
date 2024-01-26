<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'profession'=>$this->faker->name,
            'description'=>$this->faker->paragraph,
            'image'=>$this->faker->imageUrl(640,480,'animals',true),
            'published'=>$this->faker->numberBetween(0,1),


        ];
    }
}
