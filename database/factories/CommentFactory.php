<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Comment;
use Faker\Generator as Faker;
$factory->define(Comment::class, function (Faker $faker) {
	$user_id = App\Models\User::pluck('id')->toArray();
	$post_id = App\Models\Post::pluck('id')->toArray();
    return [
    	'post_id' => $faker->randomElement($post_id),
        'user_id' => $faker->randomElement($user_id),
        'content' => $faker->text(100),
        
    ];
});