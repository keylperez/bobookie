<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function movies ()
    {
        return Inertia::render('Admin/Movies');
    }

    public function bookings ()
    {
        return Inertia::render('Admin/Bookings');
    }


}
