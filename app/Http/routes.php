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
Route::get('/freelance', 'FreelanceRegistrationController@index');
Route::post('/freelance', 'FreelanceRegistrationController@create');
Route::get('/', function () { return view('welcome'); });
Route::get('/privacy','PrivacyController@show');



Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/header', 'HeaderController@index');

Route::post('/header', 'HeaderController@update');
Route::get('/conditions', 'ConditionController@index');
Route::post('/conditions', 'ConditionController@update');

Route::get('/tecnology', 'TecnologyController@index');
Route::post('/tecnology', 'TecnologyController@create');

Route::put('/tecnology/{id}', 'TecnologyController@enable');
Route::delete('/tecnology/{id}', 'TecnologyController@disable');

Route::get('/programmers', 'ProgrammersFilterController@index');
Route::post('/programmers', 'ProgrammersFilterController@search');

Route::get('/programmers/{id}', 'ProgrammersDetailsController@index');
Route::post('/programmers/{id}', 'ProgrammersDetailsController@update');