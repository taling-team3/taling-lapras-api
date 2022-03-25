<?php

namespace Database\Factories;

use App\Models\Talent;
use Carbon\Carbon;
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
            'days' =>  $this->faker->randomElement(['월', '화', '수', '목', '금', '토', '일']),
            'is_show' => true,
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
