<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vocabulary;
use App\Dictionary;

use Faker\Generator as Faker;

$factory->defineAs(Vocabulary::class, Dictionary::class, function (Faker $faker) {
    return [
         
        'lesson-id' =>factory(App\Lesson::class),
        'dictionary-id' =>factory(App\Dictionary::class)
    ];
});
