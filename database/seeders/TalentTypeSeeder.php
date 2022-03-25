<?php

namespace Database\Seeders;

use App\Models\TalentType;
use Illuminate\Database\Seeder;

class TalentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TalentType::factory(6)->create();
    }
}
