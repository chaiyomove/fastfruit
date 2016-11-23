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
// 
Route::get('success', 'Auth\RegisterController@success');
Route::get('email/confirm/{id}', 'Auth\RegisterController@emailComfirmation');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

//facebook login
Route::get('auth/facebook', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\SocialAuthController@handleProviderCallback');


/**
 * HOME
 */
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


Route::get('orchards', 'FastFruitController@orchards');
Route::get('orchards/{id}', 'FastFruitController@orchardDetail');

// Route::get('plots/{id}', 'FastFruitController@plots');
// Route::get('plot/{id}', 'FastFruitController@plotDetail');

Route::get('products', 'FastFruitController@products');
Route::get('products/{id}', 'FastFruitController@orchardProducts');
Route::get('product/{id}', 'FastFruitController@productDetail');

Route::get('matching', 'FastFruitController@createMatching')->name('matching.create');
Route::get('matching/{id}', 'FastFruitController@showMatching');

// Route::post('matching', 'FastFruitController@storeMatching');
// Route::post('matching', 'FastFruitController@postMatching');
// 
Route::get('contactus', 'FastFruitController@getContactUs');
Route::post('contactus', 'FastFruitController@postContactUs');

Route::get('search', 'FastFruitController@search');

Route::get('profile/{id}', 'FastFruitController@profile');

Route::post('review/{id}','FastFruitController@storeReview')->name('review.store');

/**
 * login required pages
 */
Route::group(['middleware' => 'auth'], function () {
	//Users
	Route::get('user/{id}/edit', 'FastFruitController@editUser'); 	//edit page
	Route::patch('user/{id}', 'FastFruitController@updateUser');	//update

	//Orchards
	Route::get('orchard', 'FastFruitController@createOrchard');
	Route::post('orchard', 'FastFruitController@storeOrchard');

	//Plots
	Route::get('plot/{id}/create', 'FastFruitController@createPlot');
	Route::post('plot', 'FastFruitController@storePlot');
	Route::get('plot/{id}/edit', 'FastFruitController@editPlot');
	Route::patch('plot/{id}', 'FastFruitController@updatePlot');
	Route::get('plot/{id}', 'FastFruitController@plotDetail');

	//Products
	Route::get('product/{id}/create', 'FastFruitController@createProduct');
	Route::post('product', 'FastFruitController@storeProduct');
	Route::get('product/{id}/edit', 'FastFruitController@editProduct');
	Route::patch('product/{id}', 'FastFruitController@updateProduct');



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
	
	Route::get('usermatching', 'FastFruitController@userMatching');
	Route::get('useraddadmin', 'FastFruitController@userAddadmin');
	Route::get('dashboard', 'FastFruitController@dashboard');
	Route::get('map', 'FastFruitController@map');
	Route::get('notifications','FastFruitController@notifications');
});


/**
 * TEST
 */
Route::get('test', function(){
	return str_random(64);
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