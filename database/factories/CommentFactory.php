<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(App\Models\User::class)->create()->id;
        },
        'post_id' => function(){
            return factory(App\Models\Post::class)->create()->id;
        },
        'body' => $faker->paragraph
    ];
});
