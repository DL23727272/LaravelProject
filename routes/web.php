<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/book', function(){
    return view('book');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/admin', function(){
    return view('admin');
});

Route::post('/book-appointment/{barber}', [BookingController::class, 'bookAppointment'])->name('book.appointment');


Route::post('/contact-form', [ContactController::class, 'processForm'])->name('contact.form');


Route::post('/barber-process/{barber}', [BookingController::class, 'bookAppointment'])->name('barber.process');


Route::post('/login', [AuthController::class, 'login'])->name('login');
