<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = auth()->user()->tickets;
        return view('customer.profile.tickets');
    }
}
