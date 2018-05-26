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

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);


Route::group(['prefix' => 'lieux'], function () {
  Route::get('ajouter', ['as' => 'place.add', 'uses' => 'PlaceController@add'])->middleware('auth');
  Route::get('getBack/{id}', ['as' => 'place.back', 'uses' => 'PlaceController@getBack']);
  Route::post('create', ['as' => 'place.create', 'uses' => 'PlaceController@create']);
  Route::get('rechercher/{search?}/{category?}', ['as' => 'place.search', 'uses' => 'PlaceController@search']);
  Route::get('/{id}', ['as' => 'place.show', 'uses' => 'PlaceController@show']);
});



Route::group(['prefix' => 'compte'], function () {
  Route::get('/', ['as' => 'compte.edit', 'uses' => 'UserController@edit']);
  Route::get('/supprimer', ['as' => 'compte.remove', 'uses' => 'UserController@remove']);
});

Route::group(['prefix' => 'auth'], function () {
  Route::get('connexion', ['as' => 'auth.connexion', 'uses' => 'Auth\LoginController@login']);
  Route::get('deconnexion', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@doLogout']);
  Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@doLogin']);
  Route::get('inscription', ['as' => 'auth.inscription', 'uses' => 'Auth\RegisterController@register']);
  Route::post('create', ['as' => 'auth.user.create', 'uses' => 'Auth\RegisterController@create']);
  Route::get('connexion/facebook', ['as' => 'auth.facebook', 'uses' => 'Auth\LoginController@redirectToProvider']);
  Route::get('connexion/facebook/callback',['as' => 'auth.facebook.callback', 'uses' => 'Auth\LoginController@handleProviderCallback']);
});

Route::group(['prefix' => 'membre'], function () {
  Route::get('/{id}', ['as' => 'user.show', 'uses' => 'UserController@show']);
  Route::post('update', ['as' => 'user.update', 'uses' => 'UserController@update']);
  Route::post('delete', ['as' => 'user.delete', 'uses' => 'UserController@delete']);
  Route::post('favoris/create/{id}', ['as' => 'favorite.create', 'uses' => 'UserController@createFavoris']);
  Route::post('favoris/delete/{id}', ['as' => 'favorite.delete', 'uses' => 'UserController@deleteFavoris']);
});
