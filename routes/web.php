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

//Guest
// Route::get('/', function () {
//     return view('guest/index');
// });

// Route::get('/about', function () {
//     return view('guest/about');
// });

Route::get('/', 'ArticlesController@homePage');
Route::get('/about', 'ArticlesController@aboutPage');
