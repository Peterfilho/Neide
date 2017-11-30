<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Pessoa::class, function (Faker $faker) {
  return [
    'nome' => $faker->name,
  ];
});
