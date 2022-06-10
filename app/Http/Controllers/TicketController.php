<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $ticket = new Ticket;
        $user = User::find($id);

        $ticket->name = $request->input('ticket_name');
        $ticket->description = $request->input('ticket_description');
        $ticket->price = $request->input('ticket_price');

        $ticket->partner_id = $user->employee->partner_id;
        $ticket->employee_id = $user->employee->id;  
        $ticket->partner_approval = 'requesting';

        $ticket->save();
        return redirect('/home')->with('status', 'Your registration is completed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function list()
    {
        $tickets = Ticket::all();
        return view('ticket.list', compact('tickets'));
    }


    public function approve(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->partner_approval = 'approved';
        $ticket->update();

        return Redirect::back()->with('status','Operation Successful!');
    }

    public function deny(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $ticket->partner_approval = 'denied';
        $ticket->update();

        return Redirect::back()->with('status','Operation Successful!');
    }
}
