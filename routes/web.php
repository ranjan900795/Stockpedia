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
Route::get('/dashboard','Dashboard@users');
/*
Route::get('/post/{id}', function($id){

  return "this is the post number".$id;

});

Route::get('home/example/posts', array( 'as' => 'homeposts', function(){

  $url = route('homeposts');//this is the helper function
  return "the url is".$url;

}));*/

Route::get('/home','Home@home');//it'll access the index method in the controller