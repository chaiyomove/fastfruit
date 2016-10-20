<?php
use Illuminate\Http\Request;
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
//     return view('zzzwelcome');
// });


Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


/**
 * HOME
 */
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


Route::get('orchards', 'FastFruitController@orchards');
Route::get('orchards/{id}', 'FastFruitController@orchardDetail');
Route::get('products', 'FastFruitController@products');
Route::get('products/{id}', 'FastFruitController@productDetail');
Route::get('matching', 'FastFruitController@getMatching')->name('matching.show');
Route::post('matching', 'FastFruitController@postMatching');
Route::get('contactus', 'FastFruitController@contactUs');
Route::get('search', 'FastFruitController@search');
Route::get('productofrochard/{id}', 'FastFruitController@productofrochard');


/**
 * login required pages
 */
Route::group(['middleware' => 'auth'], function () {
	/**
	 * user
	 */
	Route::get('user/{id}/edit', 'FastFruitController@editUser'); 	//edit page
	Route::patch('user/{id}', 'FastFruitController@updateUser');				//update

	Route::delete('matching', 'FastFruitController@deleteMatching');
	Route::get('chat', 'FastFruitController@chat');
	Route::get('userprofile/{id}', 'FastFruitController@userProfile');
	Route::get('userprofile', 'FastFruitController@userProfile');
	Route::get('addorchard', 'FastFruitController@getAddOrchard');
	Route::post('addorchard', 'FastFruitController@postAddOrchard');
	Route::get('checkgap', 'FastFruitController@checkGap');
	Route::get('updateorchard', 'FastFruitController@updateOrchard');
	Route::get('userorchard', 'FastFruitController@userOrchard');
	// Route::get('userproduct', 'FastFruitController@userProduct');
	Route::get('userproduct/{id}', 'FastFruitController@userProductDetail');
	Route::get('userproduct', 'FastFruitController@userProductDetail');
	Route::get('useraddproduct', 'FastFruitController@getUserAddProduct');
	Route::post('useraddproduct', 'FastFruitController@postUserAddProduct');
	Route::get('usermatching', 'FastFruitController@userMatching');
	Route::get('useraddadmin', 'FastFruitController@userAddadmin');
	Route::get('dashboard', 'FastFruitController@dashboard');
	
});


/**
 * TEST
 */
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

Route::get('upload', function(){
	return view('zzztest');
});

Route::post('upload', function(Request $request){
	$picture = $request->file('pic');
	dd($picture);
	// return dd($pic1->move(base_path('public_html\images'), $pic1->getClientOriginalName()));
});