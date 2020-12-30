<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Manage;
Use App\Lesson;

class ManageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
      
        factory(App\Manage::class, 10)->create()->each(function($v) {
            $v->lesson()->save(factory(App\User::class)->make());
        });

        
        factory(App\Manage::class, 10)->create()->each(function ($v2) {
            $v2->users()->save(factory(App\Lesson::class)->make());
        });

    }
}
