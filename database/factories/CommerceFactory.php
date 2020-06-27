<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commerce;
use Faker\Generator as Faker;

$factory->define(Commerce::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'category_id' => rand(1,3)
        
    ];
});
