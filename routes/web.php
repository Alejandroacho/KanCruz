<?php

use Illuminate\Support\Facades\Route;

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/contact', function () {
    return view('contact');
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
Route::get('/', 'TrialController@index')->name('trial.index');
Route::get('/reserva', 'TrialController@create')->name('trial.create');
Route::get('/habitacion', 'TrialController@view')->name('trial.view');
Route::resource('service', 'ServiceController');
Route::resource('tag', 'TagController');

Auth::routes();


Route::get('/Panel', 'Panel\PanelController@index')->name('panel.index');
Route::get('/Panel/users', 'Panel\PanelController@view_users')->name('panel.users.index');
Route::get('/Panel/room', 'Panel\PanelController@view_room')->name('room.index');
Route::get('/Panel/service', 'Panel\PanelController@view_service')->name('service.index');
Route::get('/Panel/booking', 'Panel\PanelController@view_booking')->name('booking.index');
Route::get('/Panel/client', 'Panel\PanelController@view_client')->name('client.index');
Route::get('/Panel/tag', 'Panel\PanelController@view_tag')->name('tag.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
