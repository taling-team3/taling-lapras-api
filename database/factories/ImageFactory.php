<?php

namespace Database\Factories;

use App\Models\Talent;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talent_id' => Talent::whereIsShow(true)->inRandomOrder()->first()->id,
            'url' => 'https://source.unsplash.com/random',
            'alt' => $this->faker->word(),
            'is_order' => $this->faker->randomElement([0, 1]),
            'is_show' => $this->faker->randomElement([0, 1]),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
