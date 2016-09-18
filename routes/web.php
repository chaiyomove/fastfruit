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

Route::get('test', function(){
	// $users = App\Users::all();
	// // return $users;
	// foreach ($users as $user) {
	// 	echo $user->firstName." ".$user->lastName."-".$user->provinces->provinceName;
	// 	echo "<br><hr>";
	// }

	$provinces = App\Provinces::first();
	// return $provinces;
	// foreach ($provinces as $province) {
		$users = $provinces->users;
		foreach ($users as $key => $user) {
			echo $user->firstName." ".$user->lastName."-".$user->provinces->provinceName;
			echo "<br><hr>";
		}

		echo "<br><hr>";
	// }
});

// HOME
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


Route::get('orchards', 'FastFruitController@orchards');
Route::get('orcharddetail', 'FastFruitController@orchardDetailTmp');
Route::get('products', 'FastFruitController@products');
Route::get('products/{id}', 'FastFruitController@productDetail');
Route::get('productdetail', 'FastFruitController@productDetailTmp');
Route::get('matching', 'FastFruitController@getMatching')->name('matching.show');
Route::post('matching', 'FastFruitController@postMatching');
Route::get('contactus', 'FastFruitController@contactUs');
Route::get('search', 'FastFruitController@search');


Route::group(['middleware' => 'auth'], function () {
	Route::delete('matching', 'FastFruitController@deleteMatching');
	Route::get('chat', 'FastFruitController@chat');
	Route::get('orchards/{id}', 'FastFruitController@orchardDetail');
	Route::get('userprofile/{id}', 'FastFruitController@userProfile');
	Route::get('userprofile', 'FastFruitController@userProfile');
	Route::get('addorchard', 'FastFruitController@getAddOrchard');
	Route::post('addorchard', 'FastFruitController@postAddOrchard');
	Route::get('checkgap', 'FastFruitController@checkGap');
	Route::get('updateorchard', 'FastFruitController@updateOrchard');
	Route::get('updateuserprofile', 'FastFruitController@updateUserprofile');
	Route::get('userorchard', 'FastFruitController@userOrchard');
	Route::get('userproduct', 'FastFruitController@userProduct');
	Route::get('userproduct/{id}', 'FastFruitController@userProductDetail');
	Route::get('useraddproduct', 'FastFruitController@getUserAddProduct');
	Route::post('useraddproduct', 'FastFruitController@postUserAddProduct');
	Route::get('usermatching', 'FastFruitController@userMatching');
	Route::get('useraddadmin', 'FastFruitController@userAddadmin');
	Route::get('dashboard', 'FastFruitController@dashboard');

});

