<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/details/{movie}', [UserController::class, 'discoverdetails'])->name('details');

Route::middleware('auth')->group(function () {

    // ====================== USERS ==========================
    // Discover Tab
    Route::get('/book/{id}', [BookController::class, 'index'])->name('book');
    Route::get('/book/ticket/{id}', [BookController::class, 'details'])->name('book.ticket');
    Route::post('/book/ticket/proceed', [BookController::class, 'book']);


    Route::get('/book/ticket/{id}/payment', [BookController::class, 'payment'])->name('ticket.payment');
    Route::post('/payment', [BookController::class, 'card']);
    Route::get('/discoverpaydetails', [BookController::class, 'paymentdetails']);

    Route::get('/discoverbookdetails', [UserController::class, 'discoverbookdetails']);
    Route::post('/discoverbookdetails', [BookController::class, 'store'])->name('discoverbookdetails');

    // Tickets Tab
    Route::get('/tickets', [UserController::class, 'tickets']);
    Route::get('/ticketdetails/{id}', [UserController::class, 'ticketdetails'])->name('ticketdetails');




    // ====================== ADMIN ==========================
    //Movies Tab
    Route::get('/movies', [AdminController::class, 'movies'])->name('movies')->middleware('can:create,App\Models\User');
    Route::post('/movies/create', [AdminController::class, 'create_movie'])->middleware('can:create,App\Models\User');
    Route::post('/movies/update', [AdminController::class, 'update_movie'])->middleware('can:create,App\Models\User');
    Route::post('/movies/delete', [AdminController::class, 'delete_movie'])->middleware('can:create,App\Models\User');

    //Bookings Tab
    Route::get('/bookings', [AdminController::class, 'bookings'])->middleware('can:create,App\Models\User');
    Route::post('/bookings/delete', [AdminController::class, 'bookings_delete'])->middleware('can:create,App\Models\User');

    // List Tab
    Route::get('/users', [AdminController::class, 'users'])->middleware('can:create,App\Models\User');
    Route::post('/users/delete', [AdminController::class, 'users_delete'])->middleware('can:create,App\Models\User');

    Route::post('/logout', [LoginController::class, 'logout']);
});
