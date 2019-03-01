<?php

use App\Question;
use App\QuestionCategory;
use App\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence,
        'type' => 'truth',
        'difficulty' => 'easy',
        'question_category_id' => function () {
            return factory(QuestionCategory::class)->create()->id;
        },
        'created_by' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
