<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


// HOME
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('orchards', 'FastFruitController@orchards');
Route::get('products', 'FastFruitController@products');
Route::get('matching', 'FastFruitController@matching');
Route::get('contactus', 'FastFruitController@contactUs');
Route::get('products/{id}', 'FastFruitController@productDetail');
Route::get('chat', 'FastFruitController@chat');
Route::get('orchards/{id}', 'FastFruitController@orchardDetail');
Route::get('userprofile/{id}', 'FastFruitController@userProfile');
Route::get('addorchard', 'FastFruitController@addOrchard');
Route::get('checkgap', 'FastFruitController@checkGap');
Route::get('updateorchard', 'FastFruitController@updateOrchard');
Route::get('updateuserprofile', 'FastFruitController@updateUserprofile');
Route::get('userorchard', 'FastFruitController@userOrchard');
Route::get('userproduct', 'FastFruitController@userProduct');
Route::get('userproduct/{id}', 'FastFruitController@userProductDetail');
Route::get('useraddproduct', 'FastFruitController@userAddProduct');
Route::get('usermatching', 'FastFruitController@userMatching');
Route::get('useraddadmin', 'FastFruitController@userAddadmin');


