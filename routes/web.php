<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DeleteContactController;
use App\Http\Controllers\DeleteReviewController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    return view('home');
});

Route::get('/book', function(){
    $barber = DB::table('barbers')->get();
    $review = DB::table('reviews')->get();
    return view('book', [
        'barbers' => $barber,
        'reviews' => $review
    ]);
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

Route::post('/book', [ReviewController::class, 'store'])->name('review.submitForm');


Route::get('/message', function(){
    return view('contacts');
});

Route::get('/review', function(){
    return view('review');
});

Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);

Route::delete('/reviews/{id}', [DeleteReviewController::class, 'destroy'])->name('reviews.destroy');

Route::delete('/contacts/{id}', [DeleteContactController::class, 'destroy'])->name('contacts.destroy');

// Route::get('/barbers', 'BarberController@showBarbers');

