<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use App\Level;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {

    return [ 
        'title' => $faker->title,
        'mp3-link' => $faker->title,
        'script'   =>$faker->paragraph,
        'level-id' => factory(App\Level::class)
        
    ];

});
