<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserSocialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'channel_id' => rand(1, 3),
            'channel_name' => $this->faker->randomElement(['유튜브', '인스타', '트위터']),
            'is_show' => $this->faker->randomElement([0, 1]),
        ];
    }
}
