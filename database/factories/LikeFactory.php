<?php

namespace Database\Factories;

use App\Models\Like;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class LikeFactory extends Factory
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
            'likeable_id' => $this->faker->unique()->numberBetween(1, 100000000), // Like::all()->random()->id,
            'likeable_type' => "App\Models\Talent",
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
