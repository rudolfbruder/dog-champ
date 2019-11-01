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

Route::get('/', function () {
    return view('home.home_page');
});

Auth::routes();

Route::get('/contact', 'HomeController@contact')->name('home.contact');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/about-me', 'HomeController@aboutMe')->name('home.about_me');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('dogs', 'DogsController');