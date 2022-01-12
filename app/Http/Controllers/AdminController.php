<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    
    public function movies ()
    {
        $movies = DB::table('movie')
        ->select('*')
        ->get();

        return Inertia::render('Admin/Movies',[

            'movies' => $movies->map(function($movie){
                return [
                  'id' => $movie->id,
                  'title' => $movie->title,
                  'image'=> asset('storage/'. $movie->img)   
                ];
            })
        ]);
    }

    public function create_movie(){
        $image = Request::file('image')->store('movies','public');
        $price = 1.00;
        $runtime = 120;

        DB::table('movie')->insert([
            'title' => Request::input('title'),
            'price' => $price,
            'year' => 2000,
            'rating' => Request::input('rating'),
            'runtime' => $runtime,
            'description' => Request::input('desc'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'img' => $image,
            'start_date' => Request::input('start_date'),
            'end_date' => Request::input('end_date'),
        ]);

        return Redirect::route('admin.movies');
    }

    public function delete_movie(){
        DB::table('movie')->where('id', '=', Request::input('id'))->delete();
        return Redirect::route('admin.movies');
    }

    public function bookings ()
    {
        return Inertia::render('Admin/Bookings');
    }


}
