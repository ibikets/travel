@extends('layouts.admin')

@section('title')
    Add Staff
@stop

@section('body')

    <div class="container-fluid">
        <div class="block-header">
            @include('includes.form_msg')
            <h1>Add New Staff</h1>
        </div>



        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">

                        {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) !!}

                        <h3>Bio Data</h3>

                        <div class="row clearfix">
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

                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::email('email', null, ['class'=>'form-control email', 'placeholder'=>'Email']) !!}
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
                                        {!! Form::select('gender', [''=>'Select Gender', 'M' => 'Male', 'F' => 'Female'], null,  ['class'=>'btn-group bootstrap-select form-control show-tick']) !!}
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
                                        {!! Form::text('mobile', null, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Ex: +00 (000) 000-00-00*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">home</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('lga', null, ['class'=>'form-control', 'placeholder'=>'Local Government Area*', 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="material-icons">home</i>
                                                </span>
                                    <div class="form-line">
                                        {!! Form::text('state_of_origin', null, ['class'=>'form-control', 'placeholder'=>'State Of Origin*', 'required']) !!}
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

@stop

@section('script')
    <script>
        $(document).ready(function(){

            // jQuery methods go here...
            $("#password")

        });
    </script>

@stop