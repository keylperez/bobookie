<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

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
// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/signup', [LoginController::class, 'create']);

Route::get('/signup', function () {
    return Inertia::render('SignUp');
});

// Route::middleware('auth')->group(function () {

// ====================== USERS ==========================
// Discover Tab
Route::get('/user/discover', [UserController::class, 'discover']);
Route::get('/user/discoverbook', [UserController::class, 'discoverbook']);
Route::get('/user/discoverdetails', [UserController::class, 'discoverdetails']);
Route::get('/user/discoverpayment', [UserController::class, 'payment']);
Route::get('/user/discoverpaydetails', [UserController::class, 'paymentdetails']);

Route::get('/user/discoverbookdetails', [UserController::class, 'discoverbookdetails']);
Route::post('/user/discoverbookdetails', [UserController::class, 'discoverbookdetails']);

// Tickets Tab
Route::get('/user/tickets', [UserController::class, 'tickets']);
Route::get('/user/ticketdetails', [UserController::class, 'ticketdetails']);




// ====================== ADMIN ==========================
//Movies Tab
Route::get('/admin/movies', [AdminController::class, 'movies'])->name('admin.movies');
Route::post('/admin/movies/create', [AdminController::class, 'create_movie']);
Route::post('/admin/movies/update', [AdminController::class, 'update_movie']);
Route::post('/admin/movies/delete', [AdminController::class, 'delete_movie']);

//Bookings Tab
Route::get('/admin/bookings', [AdminController::class, 'bookings']);

//User List Tab
Route::get('/users', [AdminController::class, 'users']);
// });


