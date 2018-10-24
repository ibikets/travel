@extends('layouts.admin')

@section('title')
    {{$client->fullname . "'s Profile"}}
@stop

@section('body')


    <div class="container-fluid">
        <div class="block-header">

        </div>
        <!-- Basic Example -->
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                            {{$client->fullname}} <small></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">

                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a class="bg-success" href="{{route('admin.clients.edit', $client->id)}}">Edit</a></li>
                                    <li>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <img src="{{$client->photo ? $client->photo->path : "No Image Available"}}" alt="" class="img-responsive img-rounded">
                            </div>
                            <div class="col-sm-3">
                                <h3>Personal Data</h3>
                                <p><b>First Name: </b>{{$client->firstname}} </p>
                                <p><b>Other Name: </b>{{$client->othername}}</p>
                                <p><b>Last Name: </b>{{$client->lastname}}</p>
                                <p><b>Email: </b>{{$client->email}} </p>
                                <p><b>Date Of Birth: </b>{{date('d-M-Y', strtotime($client->dob))}}</p>
                                <p><b>Gender: </b>{{$client->sex}} </p>
                                <p><b>Mobile: </b>{{$client->mobile}}</p>
                                <p><b></b></p>
                            </div>
                            <div class="col-sm-3">
                                <h3>Passport Data</h3>
                                <p><b>Passport #: </b>{{$client->passport_no}}</p>
                                <p><b>Issue Date: </b>{{date('d-M-Y', strtotime($client->issue_date))}} </p>
                                <p><b>Expiry Date: </b>{{date('d-M-Y', strtotime($client->expiry_date))}}</p>
                                <p><b></b></p>
                            </div>
                            <div class="col-sm-3">
                                <h3>Ticket Information</h3>
                                <p><b>Airline Ref:</b>{{$client->ticket->airline_ref}}</p>
                                <p><b>Ticket Ref:</b>{{$client->ticket->ticket_ref}}</p>
                                <p><b>Departing: </b>{{$client->ticket->from}}</p>
                                <p><b>Arriving: </b>{{$client->ticket->to}}</p>
                                <p><b>Flight: </b>{{$client->ticket->airline->name}}</p>
                                <p><b>Trip Type: </b>{{$client->ticket->ticket_type}}</p>
                                <p><b>Purchase Date: </b>{{date('d-M-Y', strtotime($client->ticket->purchase_date))}} </p>
                                <p><b>Departure Date: </b>{{date('d-M-Y', strtotime($client->ticket->departure_date))}}</p>
                                <p><b>Return Date: </b>{{date('d-M-Y', strtotime($client->ticket->return_date))}}</p>
                                <p><b>Ticket Cost: N </b>{{ number_format($client->ticket->actual_cost, 2)}}</p>
                                <p><b>Amount Paid: N </b>{{number_format($client->ticket->paid, 2)}}</p>
                                <p><b></b></p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['ClientController@destroy', $client->id]]) !!}


                            <div class="icon-button-demo m-t-25 pull-right">
                                {{--{!! Form::submit('DELETE CLIENT: ' . $client->fullname ,['class'=>'btn btn-danger col-sm-3 pull-right', 'onclick' => 'return confirm("Are you sure?");']) !!}--}}
                                <button type="submit" onclick='return confirm("Are you sure?");' class="btn btn-danger btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete</i></button>

                            </div>

                            {!! Form::close() !!}
                        </div>



                    </div>
                </div>
            </div>

        </div>

        <!-- #END# Basic Example -->
    </div>


@stop