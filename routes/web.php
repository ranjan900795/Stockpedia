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

Route::get('/', function () {
 return view('welcome');


});
Route::get('/dashboard','Dashboard@myprofile');

Route::get('/dashboard/portfolio','Dashboard@portfolio');

Route::get('/dashboard/orderBook','Dashboard@orderBook');

Route::get('/dashboard/transaction','Dashboard@transaction');

Route::get('/stocks/{name}','StocksController@stock');

Route::get('/stocks/getCurrentPrice/{name}','StocksController@getCurrentPrice');

Route::post('/stocks/bid/{name}','StocksController@bid');

Route::post('/stocks/offer/{name}','StocksController@offer');

Route::get('/stocks/bidQueue/{name}','StocksController@bidQueue');

Route::get('/stocks/offerQueue/{name}','StocksController@offerQueue');




Route::get('admin','Admin@addStock');

Route::post('admin/add','Admin@add');
/*
Route::get('/post/{id}', function($id){

  return "this is the post number".$id;

});

Route::get('home/example/posts', array( 'as' => 'homeposts', function(){

  $url = route('homeposts');//this is the helper function
  return "the url is".$url;

}));*/


Route::group(['middlewareGroups' => ['web']], function () {
  // Add your routes here

Route::get('/home','Home@home');//it'll access the index method in the controller
// Route::get('/home/login', 'Home@login');
// Route::get('/home/registration', 'Home@registration');
// Route::post('/login_submit','Home@login_submit');
// Route::post('/registration_submit','Home@registration_submit');

Route::get('home/registration', 'authController@showRegisterForm')->name('signup');
Route::post('home/registration', 'authController@register');
});
