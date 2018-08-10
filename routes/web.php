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

// home return welcome.blade.php
Route::get('/', 'PagesController@index' );

//if /about return folder pages file about.blade.php file
//Route::get('/about', function () {
//    return view('pages.about');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/faq', 'PagesController@faq')->name('faq');

Route::get('/policy', 'PagesController@policy')->name('policy');


