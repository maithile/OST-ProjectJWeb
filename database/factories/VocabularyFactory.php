<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vocabulary;
use App\Dictionary;
use Faker\Generator as Faker;

$factory->define(Vocabulary::class, function (Faker $faker) {
    return [
          
        'lesson_id' =>factory(App\Lesson::class),
        'dictionary_id' =>factory(App\Dictionary::class)
    ];
});
