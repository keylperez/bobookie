<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function movies()
    {
        $movies = DB::table('movie')
        ->select('*')
        ->get();

        $genres = DB::table('genre')
        ->select('*')
        ->get();
        
        $directors =DB::table('director')
        ->select('*')
        ->get();

        return Inertia::render('Admin/Movies',[

            'movies' => $movies->map(function($movie){
                return [
                  'id' => $movie->id,
                  'title' => $movie->title,
                  'rating' => $movie->rating,
                  'desc' => $movie->description,
                  'image'=> asset('storage/'. $movie->img),
                  'start_date' => Carbon::parse($movie->start_date)->isoFormat('MMMM DD, YYYY'),   
                  'end_date' => Carbon::parse($movie->end_date)->isoFormat('MMMM DD, YYYY'),   
                  'start' => $movie->start_date,
                  'end' => $movie->end_date,
                ];
            }),
            'genres' => $genres->map(function($genre){
                return [
                  'id' => $genre->id,
                  'name' => $genre->name
                ];
            }),

            'directors' => $directors->map(function($director){
                return [
                  'id' => $director->id,
                  'name' => $director->name
                ];
            })

        ]);
    }

    public function create_movie(){
        $image = Request::file('image')->store('movies','public');
        $price = 1.00;
        $runtime = 120;
        $year = 2022;

        DB::table('movie')->insert([
            'title' => Request::input('title'),
            'price' => $price,
            'year' => $year,
            'rating' => Request::input('rating'),
            'runtime' => $runtime,
            'description' => Request::input('desc'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'img' => $image,
            'start_date' => Request::input('start_date'),
            'end_date' => Request::input('end_date'),
        ]);

        // return Redirect::route('admin.movies');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function update_movie(){
        // DB::table('movie')->where('id', '=', Request::input('id'))->delete();
        // return Redirect::route('admin.movies');
        return Inertia::render('Admin/Bookings');
    }

    public function delete_movie(){
        DB::table('movie')->where('id', '=', Request::input('id'))->delete();
        return Redirect::route('admin.movies');
    }

    public function bookings()
    {
        return Inertia::render('Admin/Bookings');
    }
    
    public function users()
    {
        return Inertia::render('Admin/Users', [
            'users' => User::all(),
        ]);
    }
}
