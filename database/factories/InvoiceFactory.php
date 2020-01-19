<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'amount_in_cents' => $faker->numberBetween(10000, 100000),
        'paid_at' => $faker->optional()->dateTime,
    ];
});
