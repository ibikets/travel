@extends('layouts.admin')
@section('title')
    Clients
@stop

@section('body')
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CLIENT LIST
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{route('admin.clients.create')}}">Add Client</a></li>
                                <li><a href="javascript:void(0);"></a></li>
                                <li><a href="javascript:void(0);"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <td colspan="8" style="text-align: center"><b>Client List</b></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Departure Date</th>
                                <th>Return Date</th>
                                <th>Ticket Cost (N)</th>
                                <th>Actual Cost (N)</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>


                            </tr>
                            </tfoot>
                            <tbody>
                            @if(count($clients)>0)
                                @foreach($clients as $client)
                                    <tr>
                                        <td><a href="{{route('admin.clients.show', $client->id)}}"><b>{{$client->lastname}}</b>{{ ', ' . $client->firstname . ' ' . $client->othername}}</a></td>
                                        <td>{{$client->email}}</td>
                                        <td>{{$client->mobile}}</td>
                                        <td>{{date('d-M-Y', strtotime($client->dob))}}</td>
                                        <td>{{date('d-M-Y', strtotime($client->ticket->departure_date))}}</td>
                                        <td>{{$client->ticket->return_date ? date('d-M-Y', strtotime($client->ticket->return_date)) : "One Way"}}</td>
                                        <td>{{number_format($client->ticket->actual_cost, 2)}}</td>
                                        <td>{{number_format($client->ticket->paid, 2)}}</td>
                                        <td>{{$client->dob}}</td>
                                        <td>{{$client->ticket->departure_date ? $client->ticket->departure_date : "Not Available"}}</td>
                                        <td>{{$client->return_date}}</td>
                                        <td>{{$client->actual_cost}}</td>
                                        <td>{{$client->paid}}</td>
                                        <td>{{$client->ticket->departure_date}}</td>
                                        <td>{{$client->ticket->return_date}}</td>
                                        <td>{{$client->ticket->actual_cost}}</td>
                                        <td>{{$client->ticket->paid}}</td>
                                        <td>{{$client->dob ? date('d-M-Y', strtotime($client->dob)) : "Not Available"}}</td>
                                        <td>{{$client->ticket ? date('d-M-Y', strtotime($client->ticket->departure_date)) : "Not Available"}}</td>
                                        <td>{{$client->ticket ? date('d-M-Y', strtotime($client->ticket->return_date)) : "One Way"}}</td>
                                        <td>{{$client->ticket ? number_format($client->ticket->actual_cost, 2) : "Not Paid Yet"}}</td>
                                        <td>{{$client->ticket ? number_format($client->ticket->paid, 2) : "Not Paid Yet"}}</td>
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