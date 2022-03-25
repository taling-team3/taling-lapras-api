<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\TalentType;
use App\Models\Tutor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TalentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tutor_id' => Tutor::all()->random()->id,
            'category_id' => Category::all()->where('is_show', true)->random(),
            'talent_type_id' => TalentType::all()->where('is_show', true)->random(),
            'name' => $this->faker->word(),
            'msg_notice' => $this->faker->text(1000),
            'msg_summary' => $this->faker->text(1000),
            'msg_target' => $this->faker->text(1000),
            'msg_tutor' => $this->faker->text(1000),
            'msg_description' => $this->faker->text(1000),
            'msg_caution' => $this->faker->text(1000),
            'msg_progress' => $this->faker->text(1000),
            'view_counts' => $this->faker->numberBetween(0, 100),
            'like_counts' => $this->faker->numberBetween(0, 50),
            'is_show' => $this->faker->randomElement([0, 1]),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
