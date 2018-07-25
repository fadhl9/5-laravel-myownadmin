@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ROLES</h2>
        </div>
    </div>
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Roles Table
                        <a href="{{ route('create_role') }}" style="margin-left: 15px;"><button type="submit" class="btn btn-success waves-effect"><i class="material-icons" style="font-size: 15px">add_circle</i> Add</button></a>
                    </h2>
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
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="remember_me" class="filled-in">
                                        <label for="remember_me"></label>
                                    </th>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>
                                        <input type="checkbox" id="{{ $role->id }}" class="filled-in">
                                        <label for="{{ $role->id }}"></label>
                                    </td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->display_name }}</td>
                                    <td>{{ $role->created_at }}</td>
                                    <td>
                                        <a href=""><button type="submit" class="btn btn-warning waves-effect"><i class="material-icons" style="font-size: 15px">remove_red_eye</i> View</button></a>
                                        <a href="{{ route('edit_role', $role->id) }}"><button type="submit" class="btn btn-info waves-effect"><i class="material-icons" style="font-size: 15px">edit</i> Edit</button></a>
                                        {!! Form::open(['method'=>'DELETE', 'style'=>'display: inline;', 'action'=>['AdminRolesController@destroy', $role->id]]) !!}
                                        <button type="submit" class="btn btn-danger waves-effect"><i class="material-icons" style="font-size: 15px">delete</i> Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Table -->
</section>
@endsection