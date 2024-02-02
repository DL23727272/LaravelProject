<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
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

Route::post('/barber-process/{barber}', [BookingController::class, 'bookAppointment'])->name('barber.process');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/admin', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::get('/test', function(){
    return view('test');
});
Route::get('/home', [ContactController::class, 'index']);
Route::post('/home', [ContactController::class, 'add'])->name('contact.submitForm');



// routes/web.php
Route::post('/book', [ReviewController::class, 'store'])->name('review.submitForm');


Route::get('/message', function(){
    return view('contacts');
});

Route::get('/review', function(){
    return view('review');
});

use App\Http\Controllers\AppointmentController;

Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);
