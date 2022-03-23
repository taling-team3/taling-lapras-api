<?php

namespace Database\Factories;

use App\Models\Talent;
use App\Models\User;
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
            'user_id' => User::whereLevel('학생')->inRandomOrder()->first()->id,
            'talent_id' => Talent::all()->random()->id,
        ];
    }
}
