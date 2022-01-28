<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        // if (Auth::check()) {
        //     return redirect('/discover');
        // }
        // return Inertia::render('Login');
        return Auth::check() ? redirect('/') : Inertia::render('Login');
    }

    public function create(Request $request)
    {
        // dd($request->all());
        // return Inertia::render('Login');
    }


    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
            // dd(Auth::check());
            // dd(Auth::user());
            // var_dump(Auth::user());
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
