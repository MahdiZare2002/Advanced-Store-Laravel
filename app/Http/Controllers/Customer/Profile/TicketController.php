<?php

namespace App\Http\Controllers\Customer\Profile;

use Illuminate\Http\Request;
use App\Models\Ticket\Ticket;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Profile\StoreTicketRequest;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = auth()->user()->tickets;
        return view('customer.profile.tickets.tickets', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        return view('customer.profile.tickets.show-ticket', compact('ticket'));
    }

    public function change(Ticket $ticket)
    {
        $ticket->status = $ticket->status == 0 ? 1 : 0;
        $result = $ticket->save();
        return redirect()->back()->with('swal-success', 'تغییر شما با موفقیت انجام شد');
    }

    public function answer(StoreTicketRequest $request, Ticket $ticket)
    {

        $inputs = $request->all();
        $inputs['subject'] = $ticket->subject;
        $inputs['description'] = $request->description;
        $inputs['seen'] = 0;
        $inputs['reference_id'] = $ticket->reference_id;
        $inputs['user_id'] = auth()->user()->id;
        $inputs['category_id'] = $ticket->category_id;
        $inputs['priority_id'] = $ticket->priority_id;
        $inputs['ticket_id'] = $ticket->id;
        $ticket = Ticket::create($inputs);
        return redirect()->back()->with('swal-success', '  پاسخ شما با موفقیت ثبت شد');
    }
}
