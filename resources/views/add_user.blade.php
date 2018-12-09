@extends('layouts.master')
@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h3 class="page-title">Create User
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
                            <span class="caption-subject bold uppercase">Create User</span>
                        </div>

                    </div>
                    <div class="portlet-body">

                            <form method="POST" action="/add_user" enctype="multipart/form-data">
                {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name"  >
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Email Address</label>
      <input type="text" class="form-control" name="email"  >
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Address</label>
      <input type="text" class="form-control" name="address"  >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Civil ID</label>
      <input type="text" class="form-control" name="civil_id"  >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Mobile</label>
      <input type="text" class="form-control" name="mobile"  >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Country</label>
      <input type="text" class="form-control" name="country"  >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="password" value="" id="myInput" class="form-control" name="password"><br><br>
<input type="checkbox" onclick="myFunction()"> Show Password
    </div>
    

            

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
                 

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
