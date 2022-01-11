<?php

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;

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
// Route::get('/', function () {
    //     return view('app');
    // });

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ====================== USERS ==========================
// Discover Tab
Route::get('/user/discover', [UserController::class, 'discover']);
Route::get('/user/discoverbook', [UserController::class, 'discoverbook']);
Route::get('/user/discoverdetails', [UserController::class, 'discoverdetails']);
Route::get('/user/discoverbookdetails', [UserController::class, 'discoverbookdetails']);
Route::get('/user/discoverpayment', [UserController::class, 'payment']);
Route::get('/user/discoverpaydetails', [UserController::class, 'paymentdetails']);

// Tickets Tab
Route::get('/user/tickets', [UserController::class, 'tickets']);
Route::get('/user/ticketdetails', [UserController::class, 'ticketdetails']);


// ====================== ADMIN ==========================
//Movies Tab
Route::get('/admin/movies', [AdminController::class, 'movies']);

//Bookings Tab
Route::get('/admin/bookings', [AdminController::class, 'bookings']);




Route::get('/', function () {
    return Inertia::render('Login');
});

Route::get('/login', function () {
    return Inertia::render('Login');
});

Route::get('/signup', function () {
    return Inertia::render('SignUp');
});


