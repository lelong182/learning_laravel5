<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\user::class, function (Faker\Generator $faker) {
  return [
    'name' => $faker->name
  ];
});

$factory->define(App\todo::class, function (Faker\Generator $faker) {
  return [
    'title' => $faker->realText(100),
    'body' => $faker->realText(1000),
    'user_id' => rand(1, 10)
  ];
});
