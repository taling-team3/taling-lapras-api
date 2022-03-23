<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TalentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->unique()->randomElement(['VOD', 'Online', 'Offline', 'Best', 'Recommend', 'eBook']),
            'is_show' => $this->faker->randomElement([0, 1]),
        ];
    }
}
