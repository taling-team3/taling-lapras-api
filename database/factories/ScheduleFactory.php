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
        $started_at = Carbon::createFromTimestamp($this->faker->dateTimeBetween('-1 years', '+6 month')->getTimeStamp());
        $finished_at = Carbon::createFromFormat('Y-m-d H:i:s', $started_at)->addHours($this->faker->numberBetween( 1, 8 ) );

        return [
            'day_id' => Day::all()->random()->id,
            'started_at' => $started_at,
            'finished_at' => $finished_at,
            'is_show' => $this->faker->randomElement([0, 1]),
        ];
    }
}
