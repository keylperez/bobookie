<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function movies()
    {
        
    
        $movies = DB::table('movies')
            ->select('*')
            ->get();

        $genres = DB::table('genre')
            ->select('*')
            ->get();

        $directors = DB::table('director')
            ->select('*')
            ->get();

        

        return Inertia::render('Admin/Movies', [

            'movies' => $movies->map(function ($movie) {
                return [
                    'id' => $movie->id,
                    'title' => $movie->title,
                    'price' => $movie->price,
                    'runtime' => $movie->runtime,
                    'rating' => $movie->rating,
                    'desc' => $movie->description,
                    'director' => $movie->director,
                    'genre' => $movie->genre,
                    'image' => asset('storage/' . $movie->img),
                    'filename' => $movie->img,
                    'start' => $movie->start_date,
                    'end' => $movie->end_date,
                    'timeslot' => Movie::find($movie->id)->timeslots()->get(), 
                    'start_date' => Carbon::parse($movie->start_date)->isoFormat('MMMM DD, YYYY'),
                    'end_date' => Carbon::parse($movie->end_date)->isoFormat('MMMM DD, YYYY'),
                ];
            }),
            'genres' => $genres->map(function ($genre) {
                return [
                    'id' => $genre->id,
                    'name' => $genre->name
                ];
            }),

            'directors' => $directors->map(function ($director) {
                return [
                    'id' => $director->id,
                    'name' => $director->name
                ];
            })

        ]);
    }

    public function create_movie()
    {
        $stringArray = Request::input('timeslot');
        $intArray = array_map(
            function($value) { return (int)$value; },
            $stringArray
        );

        
        $image = Request::file('image')->store('movies', 'public');
        $runtime = Request::input('hour').'hr'.' '.Request::input('min').'min';

        $id = DB::table('movies')->insertGetId([
            'title' => Request::input('title'),
            'price' => Request::input('price'),
            'year' => Carbon::now()->year,
            'runtime' => $runtime,
            'rating' => Request::input('rating'),
            'description' => Request::input('desc'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'img' => $image,
            'start_date' => Request::input('start_date'),
            'end_date' => Request::input('end_date'),
        ]);

        Movie::find($id)->timeslots()->attach($intArray);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function update_movie()
    {
        
            if( Request::input('hour') != null &&  Request::input('min') != null){
                $runtime = Request::input('hour').'hr'.' '.Request::input('min').'min';
                DB::table('movies')->where('id', '=', Request::input('id'))->update([
                    'runtime' => $runtime,
                ]);
            }
            
            
            if(Request::file('image') != null){
                $image = Request::file('image')->store('movies', 'public');
                DB::table('movies')->where('id', '=', Request::input('id'))->update([
                    'img' => $image,
                ]);
            }

            DB::table('movies')->where('id', '=', Request::input('id'))->update([
                'title' => Request::input('title'),
                'price' => Request::input('price'),
                'year' => Carbon::now()->year,
                'rating' => Request::input('rating'),
                'description' => Request::input('desc'),
                'start_date' => Request::input('start_date'),
                'end_date' => Request::input('end_date'),
            ]);

            if(Request::input('timeslot') != null){
                $stringArray = Request::input('timeslot');
                $intArray = array_map(
                    function($value) { return (int)$value; },
                        $stringArray
                    );
                //update timeslot (detach and attach)
                Movie::find(Request::input('id'))->timeslots()->detach();
                Movie::find(Request::input('id'))->timeslots()->attach($intArray);
            }
            return redirect('/movies');
    }

    public function delete_movie()
    {
        $url = Request::input('img_path');
        $pathinfo = pathinfo($url);
        $filename =  $pathinfo['filename'].'.'.$pathinfo['extension'];

        if(Storage::exists('movies/'.$filename)){
            Storage::delete('movies/'.$filename);
        }

        DB::table('tickets')->where('movie_id', '=', Request::input('id'))->delete();
        DB::table('movies')->where('id', '=', Request::input('id'))->delete();

        return redirect('/movies');
    }
    
    public function bookings()
    {
        $bookings = DB::table('tickets')
            ->join('users', 'users.id', '=',  'tickets.user_id')
            ->join('movies', 'movies.id', '=',  'tickets.movie_id')
            ->select('tickets.*', 'users.name', 'users.email', 'movies.title')
            ->get();
            // dd($bookings);
            return Inertia::render('Admin/Bookings', ['bookings' => $bookings]);
        }
        
        public function bookings_delete(){
            DB::table('tickets')->where('id', '=', Request::input('id'))->delete();
            return redirect('/bookings');
    }


    public function users()
    {
        return Inertia::render('Admin/Users', [
            'users' => User::all(),
        ]);
    }
}
