<?php

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;

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
Route::get('/', function () {
    return Inertia::render('Login');
});

Route::get('/login', function () {
    return Inertia::render('Login');
});

Route::get('/signup', function () {
    return Inertia::render('SignUp');
});

Route::get('/bookings', function () {
    return Inertia::render('Bookings');
});

Route::get('/movies', function () {
    return Inertia::render('Movies');
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

Route::get('/discoverpayment', function () {
    return Inertia::render('Payment');
});

Route::get('/discoverpaydetails', function () {
    return Inertia::render('PaymentDetails');
});



// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
