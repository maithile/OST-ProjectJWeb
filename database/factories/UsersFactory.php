<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;   // them cho nay
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {   // them bang model cho nay
    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => $faker->randomNumber()
      
    ];
});
