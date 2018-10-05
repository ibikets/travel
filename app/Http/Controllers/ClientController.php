<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Client;
use App\Photo;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.clients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $airlines = Airline::pluck('name', 'id')->all();

        return view('admin.clients.create', compact('airlines', 'ticket_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        if ($file = $request->file('photo_id')){
            $input = $request->all();
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id'] = $photo->id;
        }else{
            $input = $request->except('photo_id');

        }

        $client = [
            'photo_id'=>$input['photo_id'],
            'firstname'=>$input['firstname'],
            'othername'=>$input['othername'],
            'lastname'=>$input['lastname'],
            'email'=>$input['email'],
            'dob'=>$input['dob'],
            'gender'=>$input['gender'],
            'mobile'=>$input['mobile'],
            'passport_no'=>$input['passport_no'],
            'expiry_date'=>$input['expiry_date'],
            'issue_date'=>$input['issue_date'],
        ];

        $client = Client::create($client);

        $input['client_id'] = $client->id;

        $ticket = [
            'client_id'=>$input['client_id'],
            'airline_id'=>$input['airline_id'],
            'from'=>$input['from'],
            'to'=>$input['to'],
            'ticket_type'=>$input['ticket_type'],
            'purchase_date'=>$input['purchase_date'],
            'departure_date'=>$input['departure_date'],
            'return_date'=>$input['return_date'],
            'actual_cost'=>$input['actual_cost'],
            'paid'=>$input['paid'],
        ];

        $ticket = Ticket::create($ticket);

        Client::findOrFail($input['client_id'])->update(['ticket_id'=>$ticket->id]);


        Session::flash('msg', $client->firstname . $client->othername . $client->lastname . ' was added to the Client List with Ticket # ' . $ticket->id );

        return redirect('/admin');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
