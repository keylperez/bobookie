<?php

namespace App\Http\Controllers;

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
        $movies = DB::table('movie')->select('*')->get();
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


    public function discoverbook()
    {
        return Inertia::render('Users/Book');
    }

    public function discoverdetails()
    {
        return Inertia::render('Users/DiscoverDetails');
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
