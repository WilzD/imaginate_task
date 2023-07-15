<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- css  -->
    <link href="{{asset('frontend/css/bootstrape5.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet" />

    <!-- css for owl slider (trending product) -->
    <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet" />

    <!--  google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&family=Roboto&display=swap" rel="stylesheet">

    <!-- font owsome -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">








</head>

<body>

    @include('layouts.inc.frontNav')
    <!-- @include('layouts.inc.frontSlider') -->

    <div class="content">
        @yield('content')
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>

    <!-- js for owl slider -->
    <script src="{{ asset('frontend/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))

    <script>
        swal("Good job!", "{{session('status')}}", "success");
    </script>

    @endif

    @yield('scripts')

</body>

</html>