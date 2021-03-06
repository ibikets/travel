@extends('layouts.admin')
@section('title')
    Airline
@stop

@section('body')
    <!-- Exportable Table -->
    @include('includes.form_msg')
    <div class="row clearfix">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW ROLE
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['method'=>'POST', 'action'=>'SettingController@storeRole']) !!}

                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name*', 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW STATUS
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['method'=>'POST', 'action'=>'SettingController@storeStatus']) !!}

                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name*', 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
    <!-- #END# Exportable Table -->

    <!-- Exportable Table -->

    <div class="row clearfix">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD NEW AIRLINE
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['method'=>'POST', 'action'=>'SettingController@storeAirline']) !!}

                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name*', 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
    <!-- #END# Exportable Table -->


    <!-- Exportable Table -->

    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        ROLES LIST
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>

                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>


                            </tr>
                            </tfoot>
                            <tbody>
                            @if(count($roles)>0)
                                @foreach($roles as $role)
                                    <tr>

                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            <a href="{{route('admin.roles.edit', $role->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float pull-left"><i class="material-icons">edit</i></a>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['SettingController@destroyRole', $role->id]]) !!}

                                            {{--{!! Form::submit('DELETE CLIENT: ' . $client->fullname ,['class'=>'btn btn-danger col-sm-3 pull-right', 'onclick' => 'return confirm("Are you sure?");']) !!}--}}
                                            <button type="submit" onclick='return confirm("Are you sure?");' class="btn btn-danger btn-circle waves-effect waves-circle waves-float pull-right"><i class="material-icons">delete</i></button>



                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="8" style="text-align: center"><b>No Clients</b></td>
                            @endif
                            </tbody>
                        </table>
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        STATUS LIST
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>

                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>


                            </tr>
                            </tfoot>
                            <tbody>
                            @if(count($statuses)>0)
                                @foreach($statuses as $status)
                                    <tr>

                                        <td>{{$status->id}}</td>
                                        <td>{{$status->name}}</td>
                                        <td>
                                            <a href="{{route('admin.status.edit', $status->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float pull-left"><i class="material-icons">edit</i></a>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['SettingController@destroyStatus', $status->id]]) !!}

                                            {{--{!! Form::submit('DELETE CLIENT: ' . $client->fullname ,['class'=>'btn btn-danger col-sm-3 pull-right', 'onclick' => 'return confirm("Are you sure?");']) !!}--}}
                                            <button type="submit" onclick='return confirm("Are you sure?");' class="btn btn-danger btn-circle waves-effect waves-circle waves-float pull-right"><i class="material-icons">delete</i></button>



                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="8" style="text-align: center"><b>No Clients</b></td>
                            @endif
                            </tbody>
                        </table>
                        {{ $statuses->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row clearfix">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        AIRLINE LIST
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>

                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>


                            </tr>
                            </tfoot>
                            <tbody>
                            @if(count($airlines)>0)
                                @foreach($airlines as $airline)
                                    <tr>

                                        <td>{{$airline->id}}</td>
                                        <td>{{$airline->name}}</td>
                                        <td>
                                            <a href="{{route('admin.airline.edit', $airline->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float pull-left"><i class="material-icons">edit</i></a>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['SettingController@destroyAirline', $airline->id]]) !!}

                                            {{--{!! Form::submit('DELETE CLIENT: ' . $client->fullname ,['class'=>'btn btn-danger col-sm-3 pull-right', 'onclick' => 'return confirm("Are you sure?");']) !!}--}}
                                            <button type="submit" onclick='return confirm("Are you sure?");' class="btn btn-danger btn-circle waves-effect waves-circle waves-float pull-right"><i class="material-icons">delete</i></button>



                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="8" style="text-align: center"><b>No Clients</b></td>
                            @endif
                            </tbody>
                        </table>
                        {{ $airlines->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->

@stop