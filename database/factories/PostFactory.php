<?php

use App\User;
use App\Category;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence;

    return [
        'slug' => str_slug($title),
        'title' => $title,
        'body' => $faker->paragraph,
        'thumbnail' => $faker->imageUrl(),
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        },
    ];
});
