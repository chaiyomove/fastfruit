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
Route::get('products/{id}', 'FastFruitController@orchardProducts');
Route::get('product/{id}', 'FastFruitController@productDetail');
Route::get('matching', 'FastFruitController@getMatching')->name('matching.show');
Route::post('matching', 'FastFruitController@postMatching');
Route::get('contactus', 'FastFruitController@getContactUs');
Route::post('contactus', 'FastFruitController@postContactUs');
Route::get('search', 'FastFruitController@search');
Route::get('plots/{id}', 'FastFruitController@plots');
Route::get('plot/{id}', 'FastFruitController@plotsDetail');
Route::get('profile/{id}', 'FastFruitController@profile');



/**
 * login required pages
 */
Route::group(['middleware' => 'auth'], function () {
	/**
	 * user
	 */
	Route::get('user/{id}/edit', 'FastFruitController@editUser'); 	//edit page
	Route::patch('user/{id}', 'FastFruitController@updateUser');	//update

	Route::get('addorchard', 'FastFruitController@getAddOrchard');
	Route::post('addorchard', 'FastFruitController@postAddOrchard');

	Route::get('plot/{id}/create', 'FastFruitController@createPlot');
	Route::post('plot', 'FastFruitController@storePlot');
	Route::get('plot/{id}/edit', 'FastFruitController@editPlot');
	Route::patch('plot/{id}', 'FastFruitController@updatePlot');

	Route::delete('matching', 'FastFruitController@deleteMatching');
	Route::get('chat', 'FastFruitController@chat');
	Route::get('userprofile/{id}', 'FastFruitController@userProfile');
	Route::get('userprofile', 'FastFruitController@userProfile');

	

	Route::get('checkgap', 'FastFruitController@checkGap');
	Route::get('orchard/{id}/edit', 'FastFruitController@editOrchard');
	Route::patch('orchard/{id}','FastFruitController@updateOrchard');
	
	Route::get('userorchard', 'FastFruitController@userOrchard');
	// Route::get('userproduct', 'FastFruitController@userProduct');
	Route::get('userproduct/{id}', 'FastFruitController@userProductDetail');
	Route::get('userproduct', 'FastFruitController@userProductDetail');
	Route::get('product/{id}/create', 'FastFruitController@getUserAddProduct');
	Route::post('product', 'FastFruitController@postUserAddProduct');
	Route::get('usermatching', 'FastFruitController@userMatching');
	Route::get('useraddadmin', 'FastFruitController@userAddadmin');
	Route::get('dashboard', 'FastFruitController@dashboard');
	Route::get('map', 'FastFruitController@map');
});


/**
 * TEST
 */
Route::get('test', function(){

	// return App\Follow_user::all();
	
	foreach (Auth::user()->orchardFollowing as $key => $orchard) {
	 	if ($orchard->idOrchard == 7) {
	 		return "YESS";
	 	}
 	} 

	// $users = App\Users::all();
	// // return $users;
	// foreach ($users as $user) {
	// 	echo $user->firstName." ".$user->lastName."-".$user->provinces->provinceName;
	// 	echo "<br><hr>";
	// }

	// $provinces = App\Provinces::first();
	// // return $provinces;
	// // foreach ($provinces as $province) {
	// 	$users = $provinces->users;
	// 	foreach ($users as $key => $user) {
	// 		echo $user->firstName." ".$user->lastName."-".$user->provinces->provinceName;
	// 		echo "<br><hr>";
	// 	}

	// 	echo "<br><hr>";
	// // }
});

Route::get('upload', function(){
	return view('zzztest');
});

Route::post('upload', function(Request $request){
	$picture = $request->file('pic');
	dd($picture);
	// return dd($pic1->move(base_path('public_html\images'), $pic1->getClientOriginalName()));
});

Route::get('blog', 'BlogController@showPosts');