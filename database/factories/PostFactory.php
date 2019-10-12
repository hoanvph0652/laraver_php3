<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Post;
use Faker\Generator as Faker;
$factory->define(Post::class, function (Faker $faker) {
	$user_id = App\Models\User::pluck('id')->toArray();
	$category_id = App\Models\Category::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_id),
        'title' => $faker->text(50),
        'content' => $faker->text(200),
        'category_id' => $faker->randomElement($category_id),
            ];
});