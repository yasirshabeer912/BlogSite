<style>
    a {
        text-decoration: none !important;
    }
</style>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome5.css') }}" rel="stylesheet">
    {{-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> --}}
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet"> --}}
</head>

<body class="home">
    <div id="wrapper">
        @include('layouts.inc.fnav')
        <div id="main-content" class="container-fluid">
            <div class="row">
                @include('layouts.inc.fsidenav')

                @yield('content')


                <aside class="col-lg-3 offset-lg-0 offset-md-3 col-md-9 order-md-3 order-2 ad-widget-content">
                    
                    <div class="ad-widget-area">
                        you can show ads here

                    </div>
                </aside>

            </div>
        </div>
        @include('layouts.inc.footer')




        
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/greedynav.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/popper.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/all.min.js') }}"></script> --}}
</body>

</html>
