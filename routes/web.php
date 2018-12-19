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


Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');

Route::get('posts', 'PostController@index')->name('posts');
Route::get('posts/create', 'PostController@create')->name('create-post');
//Route::get('posts/search', 'SearchController@show');
Route::get('posts/{category}/{post}', 'PostController@show');
Route::patch('posts/{category}/{post}', 'PostController@update');
Route::delete('posts/{category}/{post}', 'PostController@destroy');
Route::post('posts', 'PostController@store')->name('store-post');
Route::get('posts/{category}', 'PostController@index');

Route::get('/posts/{category}/{post}/comments', 'CommentController@index');
Route::post('/posts/{category}/{post}/comments', 'CommentController@store');
Route::patch('/comments/{comment}', 'CommentController@update');
Route::delete('/comments/{comment}', 'CommentController@destroy')->name('comment.destroy');

Route::get('categories', 'CategoryController@index')->name('categories');
Route::get('categories/create', 'CategoryController@create')->name('create-category');
Route::get('categories/{category}', 'CategoryController@show')->name('show-category');
Route::post('categories', 'CategoryController@store')->name('store-category');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profile');

Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');


Route::post('api/posts/{post}/image', 'Api\PostImageController@store')->middleware('auth')->name('post-image');
Route::post('api/users/{user}/avatar', 'Api\UserAvatarController@store')->middleware('auth')->name('avatar');

Route::get('podcasts', 'PodcastController@index')->name('podcasts');
