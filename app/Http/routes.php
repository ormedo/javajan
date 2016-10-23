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
Route::get('/', function () {
    return view('welcome');
});



Route::get('/privacy', function () {
    return view('privacy');
});



Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/header', 'HeaderController@index');

Route::post('/header', 'HeaderController@update');
Route::get('/conditions', 'ConditionController@index');

Route::post('/conditions', 'ConditionController@update');
