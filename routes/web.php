<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function(){
return view('test');
});
Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::group(['middleware' => 'auth'], function(){

	Route::get('admin/{all}','AdminController@implicitRoute')->where('all','.*');
	Route::resource('admin','AdminController');

	Route::get('user/{all}','UserController@implicitRoute')->where('all','.*');
	Route::resource('user','UserController');


});
