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


Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/habitacion', function () {
    return view('habitacion');
});


Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('experiencias', function () {
    return view('experiencias');
});

Route::get('calendar', function () {
    return view('calendar');
});




Route::resource('booking', 'BookingController');
Route::resource('client', 'ClientController');
Route::resource('room', 'RoomController');
Route::resource('trial', 'TrialController');




Auth::routes();

Route::get('/', 'Home\HomeController@index')->name('home.index');

Route::get('/Panel', 'Panel\PanelController@index')->name('panel.index');
Route::get('/Panel/users', 'Panel\PanelController@view_users')->name('panel.users.index');
Route::get('/Panel/room', 'Panel\PanelController@view_room')->name('room.index');
Route::get('/Panel/booking', 'Panel\PanelController@view_booking')->name('booking.index');



