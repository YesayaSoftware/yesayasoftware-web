<?php

use App\User;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->paragraph,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
