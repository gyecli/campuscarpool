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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'PageController@getLoginPage');


Route::get('/home', 'PageController@getLoginPage');

Route::get('/aboutus', 'PageController@aboutus');

Route::get('/contactus', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('welcome');
});

// Route::get('/', 'SomeController@fooFunc');