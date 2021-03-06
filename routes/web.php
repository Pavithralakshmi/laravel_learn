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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/team', 'PageController@team');
Route::get('/post', 'PostController@index');
Route::get('/create', 'PostController@create');
Route::post('/create', 'PostController@store');

// Route::resource('post', 'PostController');


// Route::get('about', function () {
//     return view('pages.about');
// });
// Route::get('contact', function () {
//     return view('pages.contact');
// });
