<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/discover', function () {
    return Inertia::render('Discover');
});

Route::get('/tickets', function () {
    return Inertia::render('Tickets');
});

Route::get('/ticketdetails', function () {
    return inertia('TicketDetails');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

