<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\QuestionCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'created_by' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
