<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        for ($x = 0; $x == $request->quantity; $x++) {
            DB::table('tickets')->insert($validated);
            $inserted = true;
        }
        if ($inserted == true) {

            $ticket = DB::table('tickets')->select('*')->where('user_id', '=', Auth::id());
            return redirect()->route('book.ticket', ['id' => Auth::id(), 'ticket' => $ticket]);
        }
        // dd($request->quantity);
    }
    public function details()
    {
        return Inertia::render('Users/BookDetails');
    }
}
