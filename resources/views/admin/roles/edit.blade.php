@extends('layouts.admin')
@section('title')
    Edit Role
@stop

@section('body')
    <!-- Exportable Table -->
    @include('includes.form_msg')
    <div class="row clearfix">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Role: {{$role->name}}
                    </h2>
                </div>
                <div class="body">
                    {!! Form::model($role, ['method'=>'PATCH', 'action'=>['RoleController@update', $role->id]]) !!}

                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name*', 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->

@stop