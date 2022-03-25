<?php

namespace Database\Factories;

use App\Models\Day;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'day_id' => Day::all()->random(),
            'started_at' => $this->faker->dateTimeBetween($startDate = '-10 days', $endDate = '-3 days')->format('Y-m-d h:00'),
            'finished_at' =>$this->faker->dateTimeBetween($startDate = '-2 days', $endDate = '+10 days')->format('Y-m-d h:00'),
            'is_show' => true,
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
