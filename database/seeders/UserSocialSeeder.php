<?php

namespace Database\Seeders;

use App\Models\UserSocial;
use Illuminate\Database\Seeder;

class UserSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserSocial::factory(100)->create();
    }
}
