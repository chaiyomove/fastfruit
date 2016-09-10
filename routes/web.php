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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/orchards', 'FastFruitController@orchards');
Route::get('/products', 'FastFruitController@products');
Route::get('/matching', 'FastFruitController@matching');
Route::get('/contactus', 'FastFruitController@contactUs');
Route::get('/products/{id}', 'FastFruitController@productDetail');
Route::get('/chat', 'FastFruitController@chat');
Route::get('/orchards/{id}', 'FastFruitController@orchardDetail');
Route::get('/userprofile/{id}', 'FastFruitController@userProfile');
Route::get('/addorchard', 'FastFruitController@addOrchard');
Route::get('/checkgap', 'FastFruitController@checkGap');
Route::get('/updateorchard', 'FastFruitController@updateOrchard');
Route::get('/updateuserprofile', 'FastFruitController@updateUserprofile');
Route::get('user/orchard', 'FastFruitController@userOrchard');
Route::get('user/product', 'FastFruitController@userProduct');
Route::get('user/product/{id}', 'FastFruitController@userProductDetail');
Route::get('user/addproduct', 'FastFruitController@userAddProduct');
Route::get('user/matching', 'FastFruitController@userMatching');
Route::get('user/addadmin', 'FastFruitController@userAddadmin');


