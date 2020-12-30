<?php

use App\Lesson;
use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(Lesson::class, 12)->create() ;

        factory(App\Lesson::class, 10)->create()->each(function ($l) {
            $l->level()->associate(factory(App\Level::class)->make());
        });

    }
}


