<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $fake->name,
        'description' => $fake->setence,
        'body' => $fake->paragraph(5, true),
        'price' => $fake->randomFloat(2,10),
        'slug' => $fake->slug,
    ];
});
