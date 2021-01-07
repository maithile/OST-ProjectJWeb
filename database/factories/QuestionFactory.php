<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return[
        'question' => $faker->title,
        'option_1' => $faker->title,
        'option_2' => $faker->title,
        'option_3' => $faker->title,
        'answer' => $faker->title,
        'lesson_id' => factory(App\Lesson::class)
    ];
});
