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
Route::get('/home', function(){
	return redirect('/');
});
Route::get('/', 		['uses'=>'PagesController@index']);
Route::get('/about', 	['uses'=>'PagesController@about']);
Route::get('/partners',	['uses'=>'PagesController@partners']);
Route::get('/courses', 	['uses'=>'PagesController@courses']);
Route::get('/contact', 	['uses'=>'PagesController@contact']);

// AUTHENTICATED AREA
Route::auth();
Route::get('/dashboard', 	['as'=>'','uses'=>'HomeController@index']);
$router->group([
  	'namespace' => 'Dashboard',
  	'middleware' => 'auth',
], function () {
  	Route::resource('dashboard/employee', 'EmployeeController');
  	Route::resource('dashboard/schedule', 'ScheduleController');
});
