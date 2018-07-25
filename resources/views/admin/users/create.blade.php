@extends('layouts.admin')

@section('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>USERS</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Create a User
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
                            {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}
                            <div class="col-sm-12">
                                
                                <!-- NAME -->
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        {!! Form::label('name', 'Name', ['class'=>'form-label']) !!}
                                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div> 
                                <!-- #END# NAME -->

                                <!-- Email -->
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        {!! Form::label('email', 'Email', ['class'=>'form-label']) !!}
                                        {!! Form::email('email', null, ['class'=>'form-control email']) !!}
                                    </div>
                                </div>
                                <!-- #END# Email -->

                                <!-- Password -->
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        {!! Form::label('password', 'Password', ['class'=>'form-label']) !!}
                                        {{-- {!! Form::password('password', null, ['class'=>'form-control']) !!} --}}
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <!-- #END# Password -->

                                <!--  Role-Select -->
                                {!! Form::select('role_id', [''=>'--Choose a role--'] + $roles, null, ['class'=>'form-control show-tick']) !!}
                                <!-- #END# Role-Select -->

                                <!-- Submit Button -->
                                <button style="font-size: 16px; margin-top: 15px;" type="submit" class="btn btn-primary waves-effect">Create User</button>
                                <!-- #END# Submit Button -->
                            </div>
                            {!! Form::close() !!}
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

@section('script')
<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
@endsection