@extends('layouts.admin')
@section('title')
    Staff Page
@stop

@section('body')
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        @include('includes.form_msg')
                        STAFF LIST
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{route('admin.users.create')}}">Add New Staff</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <td colspan="8" style="text-align: center"><b>Staff List</b></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>State Of Origin</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>


                            </tr>
                            </tfoot>
                            <tbody>
                            @if(count($users)>0)
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="{{route('admin.users.show', $user->id)}}"><b>{{$user->name}}</b></a></td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td>{{date('d-M-Y', strtotime($user->dob))}}</td>
                                        <td>{{$user->gender == 'M' ? 'Male' : 'Female'}}</td>
                                        <td>{{$user->state_of_origin}}</td>

                                    </tr>
                                @endforeach
                            @else
                                <td colspan="8" style="text-align: center"><b>No Clients</b></td>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->

@stop