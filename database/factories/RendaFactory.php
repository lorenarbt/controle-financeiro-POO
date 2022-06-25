<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Renda;
use Carbon\Carbon;

$factory->define(Renda::class, function (Faker $faker) {
    return [
        'user_id'=> 2,
        'desc'=> $faker->sentence,
        'value'=> $faker->randomFloat,
        'created_at'=> Carbon::now(),
        'updated_at'=> Carbon::now()
    ];
});
