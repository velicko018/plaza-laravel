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


Auth::routes();

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/rooms', ['as' => 'rooms', 'uses' => 'HomeController@rooms']);
Route::get('/gallery', ['as' => 'gallery', 'uses' => 'HomeController@gallery']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::get('/profile', ['as' => 'profile', 'uses' => 'HomeController@profile'])->middleware('auth');

Route::group(["prefix" => "admin", "middleware" => ["auth","admin"]], function () {

    Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@dashboard']);
    Route::resource('users', 'UserController');
    Route::resource('rooms', 'RoomController');
    Route::resource('room_types', 'RoomTypeController');
    Route::resource('reservations', 'ReservationController');

});

