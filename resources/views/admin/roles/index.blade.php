@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ROLES TABLE</h2>
        </div>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Roles
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
                                    <th>box</th>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>box</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        {!! Form::open(['method'=>'POST', 'action'=>'AdminRolesController@store']) !!}
                                        <button type="submit" class="btn btn-warning waves-effect"><i class="material-icons" style="font-size: 15px">remove_red_eye</i> View</button>
                                        <button type="submit" class="btn btn-info waves-effect"><i class="material-icons" style="font-size: 15px">edit</i> Edit</button>
                                        <button type="submit" class="btn btn-danger waves-effect"><i class="material-icons" style="font-size: 15px">delete</i> Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->

</section>
@endsection