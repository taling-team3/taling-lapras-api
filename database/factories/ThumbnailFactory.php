<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThumbnailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'https://picsum.photos/825/375',
            'alt' => $this->faker->realText(10),
            'href' => '/Talent/Detail/31822'.$this->faker->numberBetween($min=1, $max=100),
            'is_order' => 0,
            'is_show' => true,
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
