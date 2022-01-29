<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                    'id' => $movie->id,
                    'director' => $movie->director,
                    'genre' => $movie->genre,
                    'title' => $movie->title,
                    'price' => $movie->price,
                    'rating' => $movie->rating,
                    'year' => $movie->year,
                    'runtime' => $movie->runtime,
                    'description' => $movie->description,
                    'start_date' => $movie->start_date,
                    'end_date' => $movie->end_date,
                    'image' => asset('storage/' . $movie->img),
                    'timeslot' => Movie::find($movie->id)->timeslots()->get()
                ];
            }),

        ]);
    }



    public function discoverdetails(Request $request, $movie)
    {
        $item = DB::table('movies')->select('*')->where('id', '=', $movie)->get();
        return Inertia::render('Users/DiscoverDetails', [
            'item' => $item->map(function ($movie) {
                return [
                    'id' => $movie->id,
                    'director' => $movie->director,
                    'genre' => $movie->genre,
                    'title' => $movie->title,
                    'rating' => $movie->rating,
                    'description' => $movie->description,
                    'img' => asset('storage/' . $movie->img),
                    'runtime' => $movie->runtime,
                    'price' => $movie->price,
                    'start_date' => Carbon::parse($movie->start_date)->isoFormat('MMMM DD, YYYY'),
                    'end_date' => Carbon::parse($movie->end_date)->isoFormat('MMMM DD, YYYY'),
                    'start' => $movie->start_date,
                    'end' => $movie->end_date,
                ];
            }),
            'movie' => $movie
        ]);
    }


    public function tickets()
    {
        $query = DB::table('tickets')
            ->select('tickets.*', 'movies.id as movie_id', 'movies.title')
            ->join('movies', 'movies.id', '=', 'tickets.movie_id')
            ->where('tickets.user_id', '=', Auth::id())
            ->get();
        return Inertia::render('Users/Tickets', ['tickets' => $query]);
    }

    public function ticketdetails($id)
    {
        $query = DB::table('tickets')
            ->select('tickets.*', 'movies.id as movie_id', 'movies.title', 'movies.img', 'users.username', 'users.email')
            ->join('movies', 'movies.id', '=', 'tickets.movie_id')
            ->join('users', 'users.id', '=', 'tickets.user_id')
            ->where('tickets.id', '=', $id)
            ->get();
        return Inertia::render('Users/TicketDetails', [
            // 'ticket' => $query
            'ticket' => $query->map(function ($ticket) {
                return [

                    'image' => asset('storage/' . $ticket->img),
                    "created_at" => $ticket->created_at,
                    "date" => $ticket->date,
                    "email" => $ticket->email,
                    "id" => $ticket->id,
                    "movie_id" => $ticket->movie_id,
                    "name" => $ticket->name,
                    "status" => $ticket->status,
                    "timeslot" => $ticket->timeslot,
                    "title" => $ticket->title,
                    "updated_at" => $ticket->updated_at,
                    "user_id" => $ticket->user_id,
                    "username" => $ticket->username,
                ];
            })
        ]);
    }
}
