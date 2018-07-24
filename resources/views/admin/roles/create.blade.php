@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ROLES</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Create a Role
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
                    <!-- div body -->
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                {!! Form::open(['method'=>'POST', 'action'=>'AdminRolesController@store']) !!}
                                <!-- NAME -->
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        {!! Form::label('name', 'Name', ['class'=>'form-label']) !!}
                                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div> 
                                <!-- #END# NAME -->
                                <!-- Display Name -->
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        {!! Form::label('display_name', 'Display Name', ['class'=>'form-label']) !!}
                                        {!! Form::text('display_name', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <!-- #END# Display Name -->
                                <!-- Textarea -->
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        {!! Form::textarea('description', null, ['class'=>'form-control no-resize', 'rows'=>4]) !!}
                                        {!! Form::label('description', 'Description', ['class'=>'form-label']) !!}
                                    </div>
                                </div>
                                <!-- #END# Textarea -->
                                <!-- Submit Button -->
                                <button style="font-size: 16px;" type="submit" class="btn btn-primary waves-effect">Create Role</button>
                                <!-- #END# Submit Button -->
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <!-- #END# div body -->
                </div>
            </div>
        </div>
        <!-- #END# Input -->
    </div>
</section>
@endsection