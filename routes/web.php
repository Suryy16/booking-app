<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/book', function () {
        return view('book');
    });

    Route::post('/book', [BookingController::class, 'book'])->name('book');
    Route::post('/confirm-payment/{id}', [BookingController::class, 'confirmPayment']);
});





Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
// routes/web.php

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

