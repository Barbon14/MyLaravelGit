<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'date_of_birth' => $faker -> date()
    ];
});
