<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return[
        'question' => $faker->title,
        'correct_answerId' => $faker->title,
        'lesson_id' => factory(App\Lesson::class)
    ];
});
