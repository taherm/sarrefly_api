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
                            <span class="caption-subject bold uppercase">Orders</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>

                                    <th> ID </th>

                                    <th> Sender Name </th>
                                    <th> From Country </th>

                                    <th>Receiver Name </th>
                                    <th> To Country </th>

                                    <th> Receiver Mobile </th>

                                    <th> Amount </th>
                                    <th> Charges </th>

                                    <th> Type </th>
                                    <th> Status </th>
                                    <th> Code </th>
                                    <th> Converted Amount </th>
                                    <th> Actions </th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order_data)
                                <tr class="odd gradeX">

                                    <td> {{$order_data->id}} </td>
                                    <td>
                                        <a href="{{ URL('/user/'.$order_data->user_id )}}">
                                            {{$order_data->user->name}}</a>
                                    </td>
                                    <td class="center"> {{$order_data->user->country}} </td>
                                    <td class="center"> {{$order_data->receiver_name}} </td>
                                    <td class="center">{{$order_data->country}}</td>

                                    <td class="center">{{$order_data->receiver_mobile}}</td>
                                    <td class="center">{{$order_data->amount}} </td>
                                    <td class="center">{{$order_data->charges}} </td>
                                    <td class="center">{{$order_data->order_type}} </td>

                                    <td>
                                        <span class="label label-sm label-{{ $order_data->status=='failed'?'danger':($order_data->status=='pending'?'warning':'success')}}">
                                            {{$order_data->status}} </span>
                                    </td>
                                    <td class="center">{{$order_data->code}} </td>
                                    <td class="center">{{$order_data->converted_amount}} </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('edit_order/'.$order_data->id) }}">
                                                        <i class="icon-docs"></i> Edit Order </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('order_completed/'.$order_data->id) }}">
                                                        <i class="icon-docs"></i> Mark as Completed </a>
                                                </li>
                                                @if($order_data->order_type!="WU")
                                                <li>
                                                    <a href="{{ url('code/'.$order_data->id) }}">
                                                        <i class="icon-docs"></i> Enter Code </a>
                                                </li>
                                                @endif

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