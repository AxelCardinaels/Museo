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

Route::get('search', ['as' => 'api.place.search', 'uses' => 'Api\PlaceController@search']);
Route::get('user/show/{id}', ['as' => 'api.user.show', 'uses' => 'Api\UserController@show']);
Route::get('/comments/{element}/{user?}', ['as' => 'api.comment.index', 'uses' => 'Api\CommentController@index']);
Route::get('/categories', ['as' => 'api.categories.index', 'uses' => 'Api\CategoryController@index']);
Route::get('/comment/{id}/{user}', ['as' => 'api.comment.show', 'uses' => 'Api\CommentController@show']);
Route::post('/comment/create', ['as' => 'api.rating.create', 'uses' => 'Api\CommentController@create']);
Route::post('/rating/create', ['as' => 'api.rating.create', 'uses' => 'Api\RatingController@create']);
Route::post('/rating/criteria/create', ['as' => 'api.rating.criteria.create', 'uses' => 'Api\RatingController@addCriteria']);
Route::post('/like/create', ['as' => 'api.like.create', 'uses' => 'Api\LikeController@like']);
Route::post('/dislike/create', ['as' => 'api.dislike.create', 'uses' => 'Api\DislikeController@dislike']);
