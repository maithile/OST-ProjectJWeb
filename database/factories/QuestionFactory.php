<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return[
        'question' => $faker->title,
        'choice1' => $faker->title,
        'choice2' => $faker->title,
        'choice3' => $faker->title,
        'correct_answer' => $faker->title,
        'lesson_id' => factory(App\Lesson::class)
    ];
});
