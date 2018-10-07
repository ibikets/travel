@extends('layouts.admin')

@section('title')
    Edit Client
@stop

@section('body')

    <div class="container-fluid">
        <div class="block-header">
            <h1>Edit Client</h1>
        </div>



        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="">
                                <a class="btn btn-info col-sm-12" href="{{route('admin.clients.show', $client->id)}}"><b>Back to Client Profile</b></a>
                            </div>
                        </div>
                        {!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientController@update', $client->id], 'files'=>true]) !!}


                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <img height="100" src="{{$client->photo->path}}" alt="" class="img-responsive img-rounded">
                            </div>

                            <h3>Bio Data</h3>

                            <div class="col-sm-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        {!! Form::text('firstname', null, ['class'=>'form-control', 'placeholder'=>'First Name*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        {!! Form::text('othername', null, ['class'=>'form-control', 'placeholder'=>' Middle Name']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        {!! Form::text('lastname', null, ['class'=>'form-control', 'placeholder'=>'Surname*', 'required']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">DOB* : </span>
                                    <div class="form-line">
                                        {!! Form::date('dob', null, ['class'=>'form-control', 'placeholder'=>'Date Of Birth', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('gender', [''=>'Select Gender', 'M' => 'Male', 'F' => 'Female'], null,  ['class'=>'form-control show-tick']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::number('mobile', null, ['class'=>'form-control mobile-phone-number pull-left', 'placeholder'=>'Mobile*', 'required']) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row clearfix">


                        </div>
                        <div class="row clearfix">

                        </div>

                        <h3>Passport Data</h3>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">

                                    <div class="form-line">
                                        {!! Form::text('passport_no', null, ['class'=>'form-control', 'placeholder'=>'Passport Number*', 'required']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Expiry Date* : </span>
                                    <div class="form-line">
                                        {!! Form::date('expiry_date', null, ['class'=>'form-control', 'placeholder'=>'Expiry Date', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Issue Date*:  </span>
                                    <div class="form-line">
                                        {!! Form::date('issue_date', null, ['class'=>'form-control', 'placeholder'=>'Issue Date', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">attach_file</i></span>
                                    <div class="form-line">
                                        {!! Form::file('photo_id', null, ['class'=>'form-control', 'placeholder'=>'Mobile']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">

                        </div>

                        <h3>Ticket Information</h3>

                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group form-float">
                                    <span class="input-group-addon">Ariline *: </span>
                                    {!! Form::select('airline_id', [''=>'Select Airline'] + $airlines, $client->ticket->airline_id, ['class'=>'form-control show-tick', 'required']) !!}

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        {!! Form::text('from', $client->ticket->from, ['class'=>'form-control', 'placeholder'=>'From*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        {!! Form::text('to', $client->ticket->to, ['class'=>'form-control', 'placeholder'=>'To*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group form-float">
                                    <span class="input-group-addon">Trip Type* : </span>
                                    {!! Form::select('ticket_type', [''=>'Select Ticket Type', 'return'=>'Return', 'one-way'=>'One Way' ], $client->ticket->ticket_type, ['class'=>'form-control show-tick', 'required']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Purchase Date* : </span>
                                    <div class="form-line">
                                        {!! Form::date('purchase_date', $client->ticket->purchase_date, ['class'=>'form-control datetime', 'placeholder'=>'Purchase Date*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Departure Date*:  </span>
                                    <div class="form-line">
                                        {!! Form::date('departure_date', $client->ticket->departure_date, ['class'=>'form-control datetime', 'placeholder'=>'Departure Date*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Return Date:  </span>
                                    <div class="form-line">
                                        {!! Form::date('return_date', $client->ticket->return_date, ['class'=>'form-control datetime', 'placeholder'=>'Return Date']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::number('actual_cost', $client->ticket->actual_cost, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Ticket Cost*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::number('paid', $client->ticket->paid, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Amount Paid*', 'required']) !!}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            {!! Form::submit('Edit Client', ['class'=>'btn btn-success col-sm-12']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->

        {{--<!-- Advanced Form Example With Validation -->--}}
        {{--<div class="row clearfix">--}}
        {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
        {{--<div class="card">--}}
        {{--<div class="header">--}}
        {{--<h2>ADVANCED FORM EXAMPLE WITH VALIDATION</h2>--}}
        {{--<ul class="header-dropdown m-r--5">--}}
        {{--<li class="dropdown">--}}
        {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
        {{--<i class="material-icons">more_vert</i>--}}
        {{--</a>--}}
        {{--<ul class="dropdown-menu pull-right">--}}
        {{--<li><a href="javascript:void(0);">Action</a></li>--}}
        {{--<li><a href="javascript:void(0);">Another action</a></li>--}}
        {{--<li><a href="javascript:void(0);">Something else here</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="body">--}}
        {{--{!! Form::open(['method' => 'POST', 'action' => 'ClientController@store', 'id'=>'wizard_with_validation']) !!}--}}
        {{--<h3>Personal Information</h3>--}}
        {{--<fieldset>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="form-group form-float">--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::text('firstname', null, ['class'=>'form-control', 'placeholder'=>'First Name*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="form-group form-float">--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::text('othername', null, ['class'=>'form-control', 'placeholder'=>' Middle Name']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="form-group form-float">--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::text('lastname', null, ['class'=>'form-control', 'placeholder'=>'Surname*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="form-group">--}}
        {{--<span class="form-group-addon">Gender: </span>--}}
        {{--{!! Form::select('gender', [''=>'Select Gender', 'M' => 'Male', 'F' => 'Female'], null, ['class'=>'form-control']) !!}--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="form-group form-float">--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group form-float">--}}
        {{--<span class="input-group-addon">DOB*: </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::date('dob', null, ['class'=>'form-control', 'placeholder'=>'Date Of Birth', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">--}}
        {{--<i class="material-icons">phone</i>--}}
        {{--</span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::number('mobile', null, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Mobile*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</fieldset>--}}

        {{--<h3>Passport Information</h3>--}}
        {{--<fieldset>--}}
        {{--<div class="row clearfix">--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}

        {{--<div class="form-line">--}}
        {{--{!! Form::text('passport_no', null, ['class'=>'form-control', 'placeholder'=>'Passport Number *', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-sm-4">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">Expiry Date* : </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::date('expiry_date', null, ['class'=>'form-control', 'placeholder'=>'Expiry Date', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">Issue Date* :  </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::date('issue_date', null, ['class'=>'form-control', 'placeholder'=>'Issue Date', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--<div class="row clearfix">--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">Upload Passport:  </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::file('path', null, ['class'=>'form-control']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</fieldset>--}}

        {{--<h3>Ticket Information</h3>--}}
        {{--<fieldset>--}}
        {{--<div class="row clearfix">--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group form-float">--}}
        {{--<span class="input-group-addon">Ariline *: </span>--}}
        {{--{!! Form::select('airline', [''=>'Select Airline'] + $airlines, null, ['class'=>'form-control show-tick', 'required']) !!}--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::text('from', null, ['class'=>'form-control', 'placeholder'=>'From*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::text('to', null, ['class'=>'form-control', 'placeholder'=>'To*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group form-float">--}}
        {{--<span class="input-group-addon">Trip Type* : </span>--}}
        {{--{!! Form::select('ticket_type', [''=>'Select Ticket Type', 'return'=>'Return', 'one-way'=>'One Way' ], null, ['class'=>'form-control show-tick', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">Purchase Date* : </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::date('purchase_date', \Carbon\Carbon::now(), ['class'=>'form-control', 'placeholder'=>'Purchase Date*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">Departure Date*:  </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::date('departure_date', null, ['class'=>'form-control', 'placeholder'=>'Departure Date*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">Return Date:  </span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::date('return_date', null, ['class'=>'form-control', 'placeholder'=>'Return Date']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">--}}
        {{--<i class="material-icons">cash</i>--}}
        {{--</span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::number('actual_cost', null, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Ticket Cost*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
        {{--<div class="input-group">--}}
        {{--<span class="input-group-addon">--}}
        {{--<i class="material-icons">cash</i>--}}
        {{--</span>--}}
        {{--<div class="form-line">--}}
        {{--{!! Form::number('paid', null, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Amount Paid*', 'required']) !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--</fieldset>--}}

        {{--<h3>Terms & Conditions - Finish</h3>--}}
        {{--<fieldset>--}}
        {{--<input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>--}}
        {{--<label for="acceptTerms-2">I agree with the Terms and Conditions.</label>--}}
        {{--</fieldset>--}}
        {{--{!! Form::close() !!}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- #END# Advanced Form Example With Validation -->--}}


    </div>

@stop