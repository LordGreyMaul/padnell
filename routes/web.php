<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('rules', 'PagesController@rules');
Route::get('contact', 'PagesController@contact');

Auth::routes();
Route::get('/home', 'HomeController@index');
