<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return Inertia::render('TicketDetails');
});

Route::get('/discoverdetails', function () {
    return Inertia::render('DiscoverDetails');
});

Route::get('/discoverbook', function () {
    return Inertia::render('Book');
});

Route::get('/discoverbookdetails', function () {
    return Inertia::render('BookDetails');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
