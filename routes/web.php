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
Route::get('/map', 'MapController@index');

Route::get('/', function () {
    $config['center'] = 'RMIT, Australia';
    $config['zoom'] = '18';
    $config['map_height'] = '500px';
    //$config['map_width'] = '500px';
    $config['scrollwheel'] = false;

    // initialize maps using these configs above
    GMaps::initialize($config);
    
    // Add Marker
    $marker['position']= 'RMIT,Australia';
    $marker['infowindow_content']= 'RMIT University Melbourne,Australia';
    // Using icons from google site at https://sites.google.com/site/gmapsdevelopment/
    $marker['icon'] ='http://maps.google.com/mapfiles/kml/paddle/blu-circle.png';
    Gmaps::add_marker($marker);

    // creating map using $map variable so its accessible anywhere
    $map = GMaps::create_map();

    


    // passing the map to the view
    return view('welcome')->with('map',$map);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/faq', 'PagesController@faq')->name('faq');

Route::get('/policy', 'PagesController@policy')->name('policy');


//
Route::resource('vehicles','VehiclesController');