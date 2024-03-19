<?php

namespace App\Http\Controllers\admin\ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function newTickets()
    {
        $tickets = Ticket::where('seen', 0)->get();
        foreach ($tickets as $newTicket) {
            $newTicket->seen = 1;
            $result = $newTicket->save();
        }
        return view('admin.ticket.index', compact('tickets'));
    }

    public function openTickets()
    {
        $tickets = Ticket::where('status', 0)->get();
        return view('admin.ticket.index', compact('tickets'));
    }

    public function closeTickets()
    {
        $tickets = Ticket::where('status', 1)->get();
        return view('admin.ticket.index', compact('tickets'));
    }

    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.ticket.index', compact('tickets'));
    }
}
