<?php

use Illuminate\Support\Facades\Route;

// Services
Route::get('/', 'ServiceController@book')->name('service');

// Reservations
Route::post('/store', 'ReservationController@store')->name('reservation.save');
Route::get('admin', 'ServiceController@admin')->name('service.admin');
