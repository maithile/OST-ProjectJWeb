<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use App\Level;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {

    return [ 
        'title' => $faker->title,
        'image' => $faker->title,
        'mp3_file' => $faker->title,
        'script'   =>$faker->paragraph,
        'level_id' => factory(App\Level::class)
        
    ];

});
