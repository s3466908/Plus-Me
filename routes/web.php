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

//function Route to customise The Look of the Dashboard page google map API
Route::get('/home', function () {

    $config['center'] = 'RMIT, Australia';
    $config['zoom'] = '18';
    $config['map_height'] = '1000px';
    //$config['map_width'] = '500px';
    $config['scrollwheel'] = false;

    GMaps::initialize($config);
    
    
    // Add Marker
    $marker['position']= 'RMIT,Australia';
    $marker['infowindow_content']= 'RMIT University Melbourne,Australia';
    // Using icons from google site at https://sites.google.com/site/gmapsdevelopment/
    $marker['icon'] ='http://maps.google.com/mapfiles/kml/paddle/blu-circle.png';
    Gmaps::add_marker($marker);

    $map = GMaps::create_map();

    return view('home')->with('map',$map);
});

//return Index (welcome) page 
Route::get('/', function () {
    return view('welcome');
});

//Authentication Routes 
Route::get('/user/activate/{token}', 'Auth\RegisterController@activateUser');
Auth::routes();

//Page Routes 
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/checkout', 'PagesController@checkout')->name('checkout');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/policy', 'PagesController@policy')->name('policy');

//
Route::post('profile', 'UserController@update_avatar');