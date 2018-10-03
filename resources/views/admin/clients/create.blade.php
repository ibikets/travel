@extends('layouts.admin')

@section('title')
    Add New Client
@stop

@section('body')

    <div class="container-fluid">
        <div class="block-header">
            <h1>Add Client</h1>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    {{--<div class="header">--}}
                        {{--<h2>--}}
                            {{--Add A New Client--}}
                            {{--<small>Different sizes and widths</small>--}}
                        {{--</h2>--}}
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
                    <div class="body">

                        {!! Form::open(['method' => 'POST', 'action' => 'ClientController@store']) !!}

                        <h2 class="card-inside-title">Bio Data</h2>
                        <div class="row clearfix">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'First Name                                      Middle Name                                             Surname ']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::select('gender', [''=>'Select Gender', 'M' => 'Male', 'F' => 'Female'], ['class'=>'form-control show-tick']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon">DOB: </span>
                                    <div class="form-line">
                                        {!! Form::date('dob', null, ['class'=>'form-control', 'placeholder'=>'Date Of Birth']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                    <div class="form-line">
                                        {!! Form::number('mobile', null, ['class'=>'form-control mobile-phone-number', 'placeholder'=>'Mobile']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="card-inside-title">Passport Data</h2>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="input-group">

                                    <div class="form-line">
                                        {!! Form::text('passport_no', null, ['class'=>'form-control', 'placeholder'=>'Passport Number']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Expiry Date: </span>
                                    <div class="form-line">
                                        {!! Form::date('expiry_date', null, ['class'=>'form-control', 'placeholder'=>'Expiry Date']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Issue Date:  </span>
                                    <div class="form-line">
                                        {!! Form::date('issue_date', null, ['class'=>'form-control', 'placeholder'=>'Issue Date']) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Upload Passport:  </span>
                                    <div class="form-line">
                                        {!! Form::file('path', null, ['class'=>'form-control', 'placeholder'=>'Mobile']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->

        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>ADVANCED FORM EXAMPLE WITH VALIDATION</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="wizard_with_validation" method="POST">
                            <h3>Personal Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" required>
                                        <label class="form-label">Username*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" id="password" required>
                                        <label class="form-label">Password*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="confirm" required>
                                        <label class="form-label">Confirm Password*</label>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Passport Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" required>
                                        <label class="form-label">First Name*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="surname" class="form-control" required>
                                        <label class="form-label">Last Name*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control" required>
                                        <label class="form-label">Email*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Address*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input min="18" type="number" name="age" class="form-control" required>
                                        <label class="form-label">Age*</label>
                                    </div>
                                    <div class="help-info">The warning step will show up if age is less than 18</div>
                                </div>
                            </fieldset>

                            <h3>Ticket Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" required>
                                        <label class="form-label">First Name*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="surname" class="form-control" required>
                                        <label class="form-label">Last Name*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control" required>
                                        <label class="form-label">Email*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Address*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input min="18" type="number" name="age" class="form-control" required>
                                        <label class="form-label">Age*</label>
                                    </div>
                                    <div class="help-info">The warning step will show up if age is less than 18</div>
                                </div>
                            </fieldset>

                            <h3>Terms & Conditions - Finish</h3>
                            <fieldset>
                                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->


    </div>

@stop