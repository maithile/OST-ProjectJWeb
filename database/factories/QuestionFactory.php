<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return[
        'question-1' => $faker->title,
        'option-1' => $faker->title,
        'option-2' => $faker->title,
        'option-3' => $faker->title,
        'answer' => $faker->title,
        'lesson-id' => factory(App\Lesson::class)
    ];
});
