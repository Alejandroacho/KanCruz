<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/trial', function () {
    return view('trial');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::resource('booking', 'BookingController');
Route::resource('client', 'ClientController');
Route::resource('room', 'RoomController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
