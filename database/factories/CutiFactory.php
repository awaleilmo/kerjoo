<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cuti;
use Faker\Generator as Faker;

$factory->define(cuti::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'keterangan' => $faker->city,
        'dari' => date(now()),
        'sampai' => date(now()->addDay(2)),
    ];
});
