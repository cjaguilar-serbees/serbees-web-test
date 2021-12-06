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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('login');
Route::get('/registration', 'App\Http\Controllers\PagesController@registration')->name('registration');
Route::get('/booking-hour', 'App\Http\Controllers\PagesController@bookingHour')->name('booking-hour');
Route::get('/booking-day-range', 'App\Http\Controllers\PagesController@bookingDayRange')->name('booking-day-range');
Route::get('/booking-fixed', 'App\Http\Controllers\PagesController@bookingFixed')->name('booking-fixed');
Route::get('/booking-covid-test', 'App\Http\Controllers\PagesController@bookingCovidTest')->name('booking-covid-test');
Route::get('/booking-covid-test2', 'App\Http\Controllers\PagesController@bookingCovidTest2')->name('booking-covid-test2');
Route::get('/booking-covid-test3', 'App\Http\Controllers\PagesController@bookingCovidTest3')->name('booking-covid-test3');
Route::get('/services', 'App\Http\Controllers\PagesController@services')->name('services');

Route::get('/how-it-works', function() {
    return view('how-it-works');
})->name('how-it-works');

