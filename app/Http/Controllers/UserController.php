<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        #code...
    }

    public function discover()
    {
        return Inertia::render('Users/Discover');
    }

    
    public function discoverbook()
    {
        return Inertia::render('Users/Book');
    }
    
    public function discoverdetails()
    {
        return Inertia::render('Users/DiscoverDetails');
    }

    public function discoverbookdetails()
    {
        return Inertia::render('Users/BookDetails');
    }

    public function payment()
    {
        return Inertia::render('Users/Payment');
    }

    public function paymentdetails()
    {
        return Inertia::render('Users/PaymentDetails');
    }
   
    
    public function tickets()
    {
        return Inertia::render('Users/Tickets');
    }
    
    public function ticketdetails()
    {
        return Inertia::render('Users/TicketDetails');
    }


}
