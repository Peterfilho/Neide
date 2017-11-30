<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Telefone::class, function (Faker $faker) {
  return [
    'ddd' => $faker->name,
    'telefone' => $faker->buildingNumber,
    'pessoa_id' =>factory(\App\Models\Pessoa::class)->create()->first()->id,
   ];
});
