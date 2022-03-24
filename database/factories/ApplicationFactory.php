<?php

namespace Database\Factories;

use App\Models\Talent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'talent_id' => Talent::all()->random()->id,
//            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
//            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
