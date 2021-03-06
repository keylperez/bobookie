<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Movie;
use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Request;

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
        // dd($request);z
        $inserted = false;
        // dd($request);
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
        foreach ($request->inputs as $ticket) {
            Ticket::findOrFail($ticket['id'])->update([
                'name' => $ticket['name'],
                'vax_id' => $ticket['vax_id'],
            ]);
        }

        return redirect()->route('ticket.payment', ['id' => Auth::id()]);
    }


    public function payment($id)
    {
        $query = DB::table('tickets')
            ->select('tickets.*', 'movies.id as movie_id', 'movies.title', 'movies.price')
            ->join('movies', 'movies.id', '=', 'tickets.movie_id')
            ->where('tickets.user_id', '=', Auth::id())
            ->where('tickets.status', '=', 'Pending')
            ->orderBy('tickets.id')
            ->get();

        $movie = DB::table('movies')
            ->select('*')
            ->where('id', '=', $query[0]->movie_id)
            ->get();
        return Inertia::render('Users/Payment', [
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

    public function card(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'ticket_id' => 'required',
            'card_name' => "required",
            'card_number' => "required",
            'expiry_date' => "required",
            'security_code' => "required",
            'total' => "required",
            'method' => 'required',
        ]);

        $input = $request->all();
        // dd($request->ticket_id);
        Payment::create($input);
        Ticket::where('id', '=', $request->ticket_id)->update(['status' => 'Confirmed']);

        $ticket = Ticket::find(1);
        $ticket->status = 'Confirmed';
        $ticket->save();
        return redirect()->route('ticketdetails', ['id' => $request->ticket_id]);
    }

    public function paymentdetails()
    {
        return Inertia::render('Users/PaymentDetails');
    }
}
