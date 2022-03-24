<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Category;
use App\Models\Day;
use App\Models\Image;
use App\Models\Like;
use App\Models\Schedule;
use App\Models\Talent;
use App\Models\TalentType;
use App\Models\Thumbnail;
use App\Models\Tutor;
use App\Models\User;
use App\Models\UserSocial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class,
        //     UserSocialSeeder::class,
        //     TutorSeeder::class,
        //     TalentTypeSeeder::class,
        //     CategorySeeder::class,
        //     TalentSeeder::class,
        //     ImageSeeder::class,
        //     ApplicationSeeder::class,
        //     DaySeeder::class,
        //     ScheduleSeeder::class,
        // ]);
        User::factory('1000')->create();
        UserSocial::factory('100')->create();
        Tutor::factory('100')->create();
        TalentType::factory('6')->create();
        Category::factory('100')->create();
        Talent::factory('5000')->create();
        Application::factory('1000')->create();
        Image::factory('10000')->create();
        Thumbnail::factory('10')->create();
        Day::factory('100')->create();
        Schedule::factory('100')->create();
        Like::factory('15000')->create();
    }
}
