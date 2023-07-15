<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- css  -->
    <link href="{{asset('admin/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" />






</head>

<body class="">
    <div class="wrapper ">
        @include('layouts.inc.productManagerSidebar')

        <div class="main-panel">
            @include('layouts.inc.navbar')
            
            <div class="content">
<h3 style="text-align: center; color:white; background-color: #9c27b0;" >Product Manager Dashboard</h3>

                @yield('content')
            </div>
            @include('layouts.inc.footer')
        </div>
    </div>
        

      

       

       





    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/core/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}" defer></script>
    <script src="{{ asset('https://unpkg.com/default-passive-events') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
        swal("Good job!", "{{session('status')}}", "success");
    </script>
   
    @endif

    @yield('scripts')

</body>

</html>