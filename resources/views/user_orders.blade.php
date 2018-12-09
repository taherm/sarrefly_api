@extends('layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Customer Orders
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
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
                            <span class="caption-subject bold uppercase">Orders by {{$user_name}}</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>

                                    <th> Order ID </th>

                                    
                                    <th> Receiver Name </th>
                                    <th> Receiver Mobile </th>
                                    <th> Country </th>
                                    <th> Amount </th>
                                    <th> Order Type </th>
                                    <th> Status </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user_orders as $user_data)
                                <tr class="odd gradeX">

                                    <td> {{$user_data->id}} </td>
                                    <td class="center"> {{$user_data->receiver_name}} </td>
                                    <td class="center">{{$user_data->receiver_mobile}}</td>
                                    <td class="center">{{$user_data->country}}</td>
                                    <td class="center">{{$user_data->amount}}</td>
                                    
                                    <td class="center">{{$user_data->order_type}} </td>
                                    <td>
                                        <span class="label label-sm label-{{ $user_data->status=='pending'?'danger':'success'}}">
                                            {{$user_data->status}} </span>
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
