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

Route::get('/', 'WebsiteController@index');
Route::get('/search-title', 'WebsiteController@searchByTitle')->name('showSearchByTitle');
Route::get('/search-nearest','WebsiteController@searchByLocation')->name('showSearchByLocation');
Route::get('/login','WebsiteController@showLoginForm')->name('login');
Route::get('/signup','WebsiteController@showSignupForm')->name('register');