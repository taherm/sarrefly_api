@extends('layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Edit Rate 
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
                            <span class="caption-subject bold uppercase">Edit Rate {{$rate->country}}</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                            <form method="POST" action="/edit_rate/{{$rate->id}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">

   
    <div class="form-group">
      <label for="exampleInputEmail1">Country</label>
      <input type="text" class="form-control" name="country" value={{$rate->country}} >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Rate</label>
      <input type="text" class="form-control" name="rate"  value={{$rate->rate}} >
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
