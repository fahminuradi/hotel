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
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Clients
Route::resource('clients','ClientsController');
Route::get('/clients/data','ClientsController@data')->name('clients.data');

// Rooms
Route::resource('room','RoomController');
Route::get('search','RoomController@search');

// Bookings
Route::resource('booking','BookingController');
// Cancel Bookings
Route::post('booking/{room_id}/{booking_id}','BookingController@cancel')->name('booking.cancel');

// Canceled Bookings
Route::get('bookings/canceled','BookingController@canceledBookings')->name('booking.canceled');
// route export pdf booking
Route::get('pdfbooking',  'BookingController@makePDF');
// route export print

Route::get('/prnpriview','BookingController@prnpriview');