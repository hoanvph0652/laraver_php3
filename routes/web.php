<?php
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
// Route::get('/', function(){
// 	return view('welcome');
// });
Route::group( [
	'prefix' => 'users',
	'name' => 'users.',
] , function () 
{ 
Route::get('/' , 'UserController@index')->name('index');
Route::get('/create' , 'UserController@create')->name('create');
Route::post('/store', 'UserController@store' )->name('store');
Route::get('/edit/{id}', 'UserController@edit')->name('edit');
Route::post('/update/{id}','UserController@update')->name('update');
Route::get('/{id}', 'UserController@show')->name('show');
Route::post('/delete/{id}' , 'UserController@destroy')->name('delete');
});
Route::get('login','AuthController@getLoginForm')->name('auth.login_form');
Route::post('login','AuthController@LoginForm')->name('auth.login');
Route::get('posts' , 'PostController@index')->name('posts.index');
Route::get('posts/create' , 'PostController@create')->name('posts.create');
Route::post('posts/store', 'PostController@store' )->name('posts.store');
Route::get('posts/edit/{id}', 'PostController@edit')->name('posts.edit');
Route::post('posts/update/{id}','PostController@update')->name('posts.update');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::post('posts/delete/{id}' , 'PostController@destroy')->name('posts.delete');
Route::get('comments' , 'CommentController@index')->name('comments.index');
Route::get('comments/create' , 'CommentController@create')->name('comments.create');
Route::post('comments/store', 'CommentController@store' )->name('comments.store');
Route::get('comments/edit/{id}', 'CommentController@edit')->name('comments.edit');
Route::post('comments/update/{id}','CommentController@update')->name('comments.update');
Route::get('comments/{id}', 'CommentController@show')->name('comments.show');
Route::post('delete/{id}' , 'CommentController@destroy')->name('comments.delete');
//Route Category
Route::get('categories' , 'CategoryController@index')->name('categories.index');
Route::get('categories/create' , 'CategoryController@create')->name('categories.create');
Route::post('categories/store', 'CategoryController@store' )->name('categories.store');
Route::get('categories/edit/{id}', 'CategoryController@edit')->name('categories.edit');
Route::post('categories/update/{id}','CategoryController@update')->name('categories.update');
Route::get('categories/{id}', 'CategoryController@show')->name('categories.show');
Route::post('categories/delete/{id}' , 'CategoryController@destroy')->name('categories.delete');