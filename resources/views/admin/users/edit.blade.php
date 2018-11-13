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

                        {!! Form::open([$user, 'method'=>'PATCH', 'action'=>['AdminUsersController@store', $user->id], 'files'=>true]) !!}

                        <h3>Bio Data</h3>

                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        {!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'First Name*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::email('email', $user->email, ['class'=>'form-control email', 'placeholder'=>'Email']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">DOB* : </span>
                                    <div class="form-line">
                                        {!! Form::date('dob', $user->dob, ['class'=>'form-control', 'placeholder'=>'Date Of Birth', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('gender', [''=>'Select Gender', 'M' => 'Male', 'F' => 'Female'], $user->gender,  ['class'=>'btn-group bootstrap-select form-control show-tick']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">phone</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('mobile', $user->mobile, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Ex: +00 (000) 000-00-00*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">home</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('lga', $user->lga, ['class'=>'form-control', 'placeholder'=>'Local Government Area*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">home</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('state_of_origin', $user->state_of_origin, ['class'=>'form-control', 'placeholder'=>'State Of Origin*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="material-icons">attach_file</i></span>
                                    <div class="form-line">
                                        {!! Form::file('photo_id', null, ['class'=>'form-control', 'placeholder'=>'Mobile']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3>HR Data</h3>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Hire Date:  </span>
                                    <div class="form-line">
                                        {!! Form::date('hire_date', null, ['class'=>'form-control datetime', 'placeholder'=>'Hire Date']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Confirmation Date:  </span>
                                    <div class="form-line">
                                        {!! Form::date('confirmation_date', null, ['class'=>'form-control date', 'placeholder'=>'Confirmation Date']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>Salary
                                            </span>
                                    <div class="form-line">
                                        {!! Form::number('salary', null, ['class'=>'form-control money-dollar', 'placeholder'=>'Ex: 99,99 *', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">assignment_ind</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('position', null, ['class'=>'form-control', 'placeholder'=>'Designation*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">assignment_ind</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('bank', null, ['class'=>'form-control', 'placeholder'=>'Bank Name*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::number('account_no', null, ['class'=>'form-control', 'placeholder'=>'Account No.:', 'required']) !!}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h3>System Data</h3>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                    <i class="material-icons">lock</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::password('password', ['class'=>'form-control', 'id'=>'password', 'placeholder'=>'Password', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                    <i class="material-icons">lock</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::password('confirm_password', ['class'=>'form-control', 'id'=>'confirm_password', 'placeholder'=>'Confirm Password', 'required']) !!}
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row clearfix">

                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Client', ['class'=>'btn btn-primary col-sm-3']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
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

                        {!! Form::open([$user, 'method'=>'PATCH', 'action'=>['AdminUsersController@store', $user->id], 'files'=>true]) !!}

                        <div class="row clearfix">
                            <div class="form-group">
                                {!! Form::label('name', 'Name: ') !!}
                                {!! Form::text('name', null,  ['class'=>'form-control'] ) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email: ') !!}
                                {!! Form::email('email', null,  ['class'=>'form-control'] ) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>


                        {!! Form::close() !!}





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
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        {!! Form::text('ticket_ref', $client->ticket->ticket_ref, ['class'=>'form-control', 'placeholder'=>'Airline Ref: ']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="form-line">
                                        {!! Form::text('airline_ref', $client->ticket->airline_ref, ['class'=>'form-control', 'placeholder'=>'Airline Ref: ']) !!}
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
                                    <span class="input-group-addon">Departure Time:  </span>
                                    <div class="form-line">
                                        {!! Form::time('departure_time', $client->ticket->departure_time, ['class'=>'form-control time12', 'placeholder'=>'Departure Time', 'required']) !!}
                                    </div>
                                </div>
                            </div>
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
                                    <span class="input-group-addon">Return Time:  </span>
                                    <div class="form-line">
                                        {!! Form::time('return_time', $client->ticket->return_time, ['class'=>'form-control time12', 'placeholder'=>'Return Time']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
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

    </div>

@stop