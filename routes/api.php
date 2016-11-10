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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('fruitspecies/{id}', 'ApiController@fruitSpecies');
Route::get('user/{uid}/followorchard/{id}', 'ApiController@followOrchard');
Route::get('user/{uid}/unfolloworchard/{id}', 'ApiController@unFollowOrchard');
Route::get('user/{uid}/followuser/{id}', 'ApiController@followUser');
Route::get('user/{uid}/unfollowuser/{id}', 'ApiController@unFollowUser');
Route::get('user/{uid}/bookmark/{id}', 'ApiController@bookmark');
Route::get('user/{uid}/unbookmark/{id}', 'ApiController@unbookmark');