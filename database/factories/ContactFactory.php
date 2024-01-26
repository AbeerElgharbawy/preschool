<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        


        return [
            //'guardianName'=>fake()->name,
            'email' => $this->faker->unique()->safeEmail(),
            'subject' =>$this->faker->name,
            'name' =>$this->faker->name,
            'message'=>$this->faker->paragraph,
        ];
    }
}
