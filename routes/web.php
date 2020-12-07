<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Accommodation_type;
use App\Http\Controllers\Accommodation;
use App\Http\Controllers\Activity;
use App\Http\Controllers\Booking;
use App\Http\Controllers\City;
use App\Http\Controllers\Content;
use App\Http\Controllers\County;
use App\Http\Controllers\Review;


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
})->name('home');

Route::resource('accommodation_types', Accommodation_typeController::class);
Route::resource('accommodations', AccommodationController::class);
Route::resource('activities', ActivityController::class);
Route::resource('bookings', BookingController::class);
Route::resource('cities', CityController::class);
Route::resource('contents', ContentController::class);
Route::resource('counties', CountyController::class);
Route::resource('reviews', ReviewController::class);