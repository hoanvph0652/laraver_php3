<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\User;
use Faker\Generator as Faker;

use App\Models\Post;


Route::get('/', function () {
    return view('welcome');
});

Route::get('starter', function () {
	$users = factory(User::class, 10)
	->make()
	->toArray();
	 return view('starter', ['users' => $users]);
});

Route::get('route-starter', function () {
	//$users = factory(User::class, 10)
	//->make()
	//->toArray();
	$users = User::all()->toArray();
    return view('starter', ['users' => $users]);
})->name('users.index');

Route::get('post', function () {
	$posts = factory(Post::class, 10)
	->make()
	->toArray();
    return view('post', ['posts' => $posts]);
});

Route::get('users/{id}', function ($id) {
	$users = User::find($id);
	dd($users);
})->name('users.show');

Route::get('users/create', function (Faker $faker) {
		$users = User::create([
		'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
		'birthday'=> $faker->date(), 
		'password' => bcrypt('123456'),    
	]);
	return redirect()->route('users.index');
});



Route::get('users/delete/{id}', function ($id) {
		$users = User::find($id);
		//$users -> name = 'Toan';
        //$users -> email = 'toanlv@gamil.com';
		$users->delete();
		
	return redirect()->route('users.index');
});