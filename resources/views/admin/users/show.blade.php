@extends('layouts.admin')

@section('title')
    {{$user->name . "'s Profile"}}
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
                            {{$user->name}} <small></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">

                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a class="bg-success" href="{{route('admin.users.edit', $user->id)}}">Edit</a></li>
                                    <li>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <img src="{{$user->photo ? $user->photo->path : "No Image Available"}}" alt="" class="img-responsive img-rounded">
                            </div>
                            <div class="col-sm-4">
                                <h3>Personal Data</h3>
                                <p><b>Full Name: </b>{{$user->name}} </p>
                                <p><b>Mobile: </b>{{$user->mobile ? $user->mobile : "Not Assigned"}}</p>
                                <p><b>Email: </b>{{$user->email}} </p>
                                <p><b>Date Of Birth: </b>{{$user->date ? date('d-M-Y', strtotime($user->dob)) : "Not Assigned"}}</p>
                                <p><b>Gender: </b>{{$user->gender ? $user->gender : "Not Assigned"}} </p>
                                <p><b>LGA: </b>{{$user->lga ? $user->lga : "Not Assigned"}}</p>
                                <p><b>State Of Origin: </b>{{$user->state_of_origin ? $user->state_of_origin : "Not Assigned"}}</p>
                                <p><b></b></p>
                            </div>
                            <div class="col-sm-4">
                                <h3>HR Data</h3>
                                <p><b>Hire Date: </b>{{$user->hire_date ? date('d-M-Y', strtotime($user->hire_date)) : "Not Assigned"}}</p>
                                <p><b>Confirmation Date: </b>{{$user->confirmation_date ? date('d-M-Y', strtotime($user->confirmation_date)) : "Not Assigned"}}</p>
                                <p><b>Designation: </b>{{$user->position ? $user->position : "Not Assigned"}} </p>
                                <p><b>Salary: </b>{{$user->salary ? $user->salary : "Not Assigned"}}</p>
                                <p><b>Bank: </b>{{$user->bank ? $user->bank : "Not Assigned"}} </p>
                                <p><b>Account Number: </b>{{$user->account_no ? $user->account_no : "Not Assigned"}} </p>
                                <p><b></b></p>
                            </div>

                        </div>
                        <div class="row clearfix">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}


                            <div class="icon-button-demo m-t-25 pull-right">
                                {{--{!! Form::submit('DELETE CLIENT: ' . $user->fullname ,['class'=>'btn btn-danger col-sm-3 pull-right', 'onclick' => 'return confirm("Are you sure?");']) !!}--}}
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