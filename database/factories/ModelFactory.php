<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->sentence,
        'sub_title' => $faker->sentence,
        'content' => $faker->paragraph,
        'page_view' => rand(0, 20),
    ];
});

$factory->define(App\Comment::class, function ($faker) {
    return [
        'title' => $faker->sentence,
        'sub_title' => $faker->sentence,
        'content' => $faker->paragraph,
        'page_view' => rand(0, 20),
    ];
});