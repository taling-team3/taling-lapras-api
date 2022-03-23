<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::whereLevel('강사')->inRandomOrder()->first()->id,
            'career' => $this->faker->sentence(),
            'license' => $this->faker->sentence(),
            'description' => $this->faker->text(3000),
        ];
    }
}
