<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        #code...
    }

    public function discover()
    {
        $movies = DB::table('movies')->select('*')->get();
        return Inertia::render('Users/Discover', [
            'movies' => $movies->map(function ($movie) {
                return [
                    'title' => $movie->title,
                    'id' => $movie->id,
                    'price' => $movie->price,
                    'rating' => $movie->rating,
                    'year' => $movie->year,
                    'runtime' => $movie->runtime,
                    'description' => $movie->description,
                    'start_date' => $movie->start_date,
                    'end_date' => $movie->end_date,
                    'image' => asset('storage/' . $movie->img),
                ];
            }),

        ]);
    }


    public function discoverbook($id)
    {
        $item = DB::table('movies')->select('*')->where('id', '=', $id)->get();
        return Inertia::render('Users/Book', [
            'item' => $item->map(function ($movie) {
                return [
                    'id' => $movie->id,
                    'title' => $movie->title,
                    'rating' => $movie->rating,
                    'description' => $movie->description,
                    'img' => asset('storage/' . $movie->img),
                    'start_date' => Carbon::parse($movie->start_date)->isoFormat('MMMM DD, YYYY'),
                    'end_date' => Carbon::parse($movie->end_date)->isoFormat('MMMM DD, YYYY'),
                    'start' => $movie->start_date,
                    'end' => $movie->end_date,
                ];
        }),]);
    }

    public function discoverdetails(Request $request, $movie)
    {
        $item = DB::table('movies')->select('*')->where('id', '=', $movie)->get();
        return Inertia::render('Users/DiscoverDetails', [
            'item' => $item->map(function ($movie) {
                return [
                    'id' => $movie->id,
                    'title' => $movie->title,
                    'rating' => $movie->rating,
                    'description' => $movie->description,
                    'img' => asset('storage/' . $movie->img),
                    'start_date' => Carbon::parse($movie->start_date)->isoFormat('MMMM DD, YYYY'),
                    'end_date' => Carbon::parse($movie->end_date)->isoFormat('MMMM DD, YYYY'),
                    'start' => $movie->start_date,
                    'end' => $movie->end_date,
                ];
        }),]);
    }

    public function discoverbookdetails(Request $request)
    {

        return Inertia::render('Users/BookDetails', [
            'count' => $request->count
        ]);
    }

    public function payment()
    {
        return Inertia::render('Users/Payment');
    }

    public function paymentdetails()
    {
        return Inertia::render('Users/PaymentDetails');
    }


    public function tickets()
    {
        return Inertia::render('Users/Tickets');
    }

    public function ticketdetails()
    {
        return Inertia::render('Users/TicketDetails');
    }
}
