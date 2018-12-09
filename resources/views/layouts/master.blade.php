<!DOCTYPE html>

<html lang="en">

@include('partials.head')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
    @include('partials.header')
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include('partials.sidebar')
        <!-- BEGIN CONTENT -->

        @yield('content')
        <!-- END CONTENT -->
    </div>
    @if($flash=session('message'))
        <div class="alert alert-success" id="flash-message">
  {{$flash}}
</div>
@endif
    <!-- END CONTAINER -->
    @include('partials.footer')

    @include('partials.scripts')
</body>

</html>
