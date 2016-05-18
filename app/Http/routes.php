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

Route::group(['middleware' => ['web']], function () {


    
	
});
// routes here

	Route::controller('site', 'WebsiteController');

	Route::controller('admin', 'AdminController');


	Route::get('/', 'WebsiteController@getHome');

	Route::get('myname', function(){

	return 'Hello World';
	});

	Route::get('admin/logout',function(){
	Session::flush();
	Auth::logout();
	return Redirect::to('admin/login');
	});
