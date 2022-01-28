<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
    //
    public function index($id)
    {
        $items = DB::table('movies')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        $timeslots = DB::table('movie_timeslot')
            ->select('timeslots.*')
            ->join('timeslots', 'timeslots.id', '=', 'movie_timeslot.timeslot_id')
            // ->join('timeslots', 'timeslot.id', '=', 'movie_timeslot.timeslot_id')
            ->where('movie_timeslot.movie_id',  '=', $id)
            ->get();
        // dd($timeslots);
        return Inertia::render('Users/Book', [
            'item' => $items->map(function ($item, $timeslots) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'rating' => $item->rating,
                    'description' => $item->description,
                    'img' => asset('storage/' . $item->img),
                    'start_date' => Carbon::parse($item->start_date)->isoFormat('MMMM DD, YYYY'),
                    'end_date' => Carbon::parse($item->end_date)->isoFormat('MMMM DD, YYYY'),
                    'runtime' => $item->runtime,
                    'price' => $item->price,
                    'start' => $item->start_date,
                    'end' => $item->end_date,
                ];
            }),
            'timeslots' => $timeslots
        ]);
    }
    public function store(Request $request)
    {
        // dd($request);
        $inserted = false;
        $validated = $request->validate([
            'timeslot' => 'required',
            'date' => 'required',
            'movie_id' => 'required',
            'user_id' => 'required',
            // 'quantity' => 'required',
        ]);
        for ($x = 0; $x < $request->quantity; $x++) {
            DB::table('tickets')->insert($validated);
            $inserted = true;
        }
        if ($inserted == true) {

            $ticket = DB::table('tickets')->select('*')->where('user_id', '=', Auth::id());
            return redirect()->route('book.ticket', ['id' => Auth::id()]);
        }
        return redirect()->back();
    }
    public function details()
    {
        $query = DB::table('tickets')
            ->select('tickets.*', 'movies.id as movie_id', 'movies.title')
            ->join('movies', 'movies.id', '=', 'tickets.movie_id')
            ->where('tickets.user_id', '=', Auth::id())
            ->where('tickets.status', '=', 'Pending')
            ->orderBy('tickets.id')
            ->get();
        // dd($query);
        $movie = DB::table('movies')
            ->select('*')
            ->where('id', '=', $query[0]->movie_id)
            ->get();
        return Inertia::render('Users/BookDetails', [
            'tickets' => $query,
            'movie' => $movie->map(function ($movie) {
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
    public function book(Request $request)
    {
        // $image = Request::file('image')->store('name', 'public');
        dd($request);
        // $attributes = $request->validate([]);
        DB::table('tickets')->where('id', '=', $request->inputs);
    }
}
