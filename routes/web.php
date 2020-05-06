<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('room', 'RoomController');
Route::resource('booking', 'BookingController');
Route::resource('tag','TagController');


