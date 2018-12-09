@extends('layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Edit order
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
                            <span class="caption-subject bold uppercase">Edit Order</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                            <form method="POST" action="/edit_order/{{$order->id}}" enctype="multipart/form-data">
                {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Receiver Name</label>
      <input type="text" class="form-control" name="name" value="{{$order->receiver_name}}" >
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Receiver Mobile</label>
      <input type="text" class="form-control" name="mobile" value="{{$order->receiver_mobile}}"  >
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Civil ID</label>
      <input type="text" class="form-control" name="civil_id" value="{{$order->civil_id}}"  >
    </div>
    

    <div class="form-group">
      <label for="exampleInputEmail1">Receiver Address</label>
      <input type="text" class="form-control" name="address" value="{{$order->receiver_address}}"  >
    </div>
            

            
    <div class="form-group">
      <label for="exampleInputEmail1">Country</label>
      <input type="text" class="form-control" name="country" value="{{$order->country}}"  >
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Amount</label>
      <input type="text" class="form-control" name="amount" value="{{$order->amount}}"  >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Order Type</label>
      <input type="text" class="form-control" name="order_type"  value="{{$order->order_type}}" >
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Status</label>
      <input type="text" class="form-control" name="status" value="{{$order->status}}"  >
    </div>
                 

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
                </form>



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
