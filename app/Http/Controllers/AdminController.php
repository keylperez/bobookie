<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function movies()
    {
        return Inertia::render('Admin/Movies');
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
