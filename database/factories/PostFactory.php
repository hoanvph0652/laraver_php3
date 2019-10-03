<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Post::class, function (Faker $faker) {
    return [
    	'content'=> $faker->sentence(),
    	'user_id'=> $faker->randomDigit(),
        //
    ];
});
