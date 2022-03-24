<?php

namespace Database\Factories;

use App\Models\Talent;
use Illuminate\Database\Eloquent\Factories\Factory;

class DayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talent_id' => Talent::all()->random()->id,
            'days' => $this->faker->randomElement(['월', '화', '수', '목', '금', '토', '일']),
            'is_show' => $this->faker->randomElement([0, 1]),
        ];
    }
}
