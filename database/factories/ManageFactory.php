<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manage;
use App\User;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Manage::class, function(Faker $faker){
    return [ 
         'lesson_id'=>factory(App\Lesson::class),
         'user_id'=>factory(App\User::class)
    ];
});
