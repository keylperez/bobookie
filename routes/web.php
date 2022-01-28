<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [UserController::class, 'discover'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
Route::post('/signup', [RegisterController::class, 'create']);


Route::middleware('auth')->group(function () {

    // ====================== USERS ==========================
    // Discover Tab
    Route::get('/book/{id}', [UserController::class, 'discoverbook'])->name('book');
    Route::get('/details/{movie}', [UserController::class, 'discoverdetails'])->name('details');
    Route::get('/discoverpayment', [UserController::class, 'payment']);
    Route::get('/discoverpaydetails', [UserController::class, 'paymentdetails']);

    Route::get('/discoverbookdetails', [UserController::class, 'discoverbookdetails']);
    Route::post('/discoverbookdetails', [UserController::class, 'discoverbookdetails']);

    // Tickets Tab
    Route::get('/tickets', [UserController::class, 'tickets']);
    Route::get('/ticketdetails', [UserController::class, 'ticketdetails']);




    // ====================== ADMIN ==========================
    //Movies Tab
    Route::get('/movies', [AdminController::class, 'movies'])->name('movies')->middleware('can:create,App\Models\User');
    Route::post('/movies/create', [AdminController::class, 'create_movie'])->middleware('can:create,App\Models\User');
    Route::post('/movies/update', [AdminController::class, 'update_movie'])->middleware('can:create,App\Models\User');
    Route::post('/movies/delete', [AdminController::class, 'delete_movie'])->middleware('can:create,App\Models\User');

    //Bookings Tab
    Route::get('/bookings', [AdminController::class, 'bookings'])->middleware('can:create,App\Models\User');

    // List Tab
    Route::get('/users', [AdminController::class, 'users'])->middleware('can:create,App\Models\User');

    Route::post('/logout', [LoginController::class, 'logout']);
});
