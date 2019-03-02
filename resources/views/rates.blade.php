@extends('layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Exchange Rates
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
                            <span class="caption-subject bold uppercase">Rates</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>

                                    <th> ID </th>

                                    
                                    <th>Country</th>
                                    
                                   
                                    <th> Rate </th>
                                   
                                    <th> Actions </th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rates as $rate_data)
                                <tr class="odd gradeX">

                                    <td> {{$rate_data->id}} </td>
                                    
                                    <td class="center"> {{$rate_data->country}} </td>
                                    <td class="center"> {{$rate_data->rate}} </td>
                                    
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown"
                                                aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('edit_rate/'.$rate_data->id) }}">
                                                        <i class="icon-docs"></i> Edit Rate </a>
                                                </li>
                                               <li>
                                               <form method="POST" action="/delete_rate/{{$rate_data->id}}" class="delete">
										{{ csrf_field() }}
										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-danger" type="submit">Delete Rate</button>
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
