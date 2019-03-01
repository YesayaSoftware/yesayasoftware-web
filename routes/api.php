<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('posts', 'Api\PostController@index');
Route::get('authors', 'Api\UserController@index');
Route::get('comments', 'Api\CommentController@index');

Route::get('question_categories', 'Api\QuestionCategoryController@index');

Route::get('questions', 'Api\QuestionController@index');
Route::post('questions', 'Api\QuestionController@store')->name('store-question');

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('logout', 'Api\Auth\LoginController@logout');
});