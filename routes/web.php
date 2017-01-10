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

/*Route::get('/', function () {
    return view('welcome');
});*/


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/portfolio', function () {
//     return view('portfolio');
// });

// Route::get('/contact-us', function () {
//     return view('contact-us');
// });

Route::get('/',['as'=>'index','uses'=>'IndexController@getPage']);
Route::get('/about-us',['as'=>'about-us','uses'=>'AboutUsController@getPage']);
Route::get('/services',['as'=>'services','uses'=>'ServicesController@getPage']);
Route::get('/portfolio',['as'=>'portfolio','uses'=>'PortfolioController@getPage']);

Route::get('/contact-us',['as'=>'contact-us','uses'=>'ContactUsController@getPage']);
