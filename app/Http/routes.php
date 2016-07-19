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

Route::get('/', 		['uses'=>'PagesController@index']);
Route::get('/about', 	['uses'=>'PagesController@about']);
Route::get('/partners',	['uses'=>'PagesController@partners']);
Route::get('/courses', 	['uses'=>'PagesController@courses']);
Route::get('/contact', 	['uses'=>'PagesController@contact']);

Route::auth();
Route::get('/home', 	['uses'=>'HomeController@index']);
//Employee
Route::get('/employee', ['uses'=>'EmployeeController@index']);
