<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //$faker untuk mendapatkan data secara random
        'title' => $faker->sentence(),
        'content' => $faker->realText(2000),
        'feature_image' => $faker->imageUrl(750, 300, 'cats', true),
    ];
});
