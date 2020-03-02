@extends('layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Users
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="/">Home</a>
                </li>
            </ul>
        </div>



        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">Users</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>

                                    <th> ID</th>
                                    <th> Name </th>
                                    <th> Email</th>
                                    <th> Address</th>
                                    <th> Civil ID</th>
                                    <th> Mobile</th>
                                    <th> Country</th>
                                    <th> No. of Orders </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user_data)
                                <tr class="odd gradeX">

                                    <td> {{$user_data->id}} </td>
                                    <td class="center"> {{$user_data->name}} </td>
                                    <td class="center">{{$user_data->email}}</td>
                                    <td class="center">{{$user_data->address}}</td>
                                    <td class="center">{{$user_data->civil_id}}</td>
                                    <td class="center">{{$user_data->mobile}}</td>
                                    <td class="center">{{$user_data->country}}</td>
                                    <td class="center">{{$user_data->orders->count()}} </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('edit_user/'.$user_data->id) }}">
                                                        <i class="icon-docs"></i> Edit User </a>
                                                </li>
                                                <li>
                                                    <form method="POST" action="/delete_user/{{$user_data->id}}" class="delete">
                                                        {{ csrf_field() }}
                                                        <input name="_method" value="delete" type="hidden">
                                                        <button class="btn btn-danger" type="submit">Delete User</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>






        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

<!-- END CONTENT BODY -->


@endsection