<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMS - SAUYO</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('js/sweetalert.min.js') }}"></script> -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/brands.min.js') }}"></script>
    <script src="{{ asset('js/regular.min.js') }}"></script>
    <script src="{{ asset('js/solid.js') }}"></script>
    <script src="{{ asset('js/solid.min.js') }}"></script>
    <script src="{{ asset('js/v4-shims.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!-- <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script> -->
    <script src="{{ asset('js/myscript.js') }}"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/regular.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/svg-with-js.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/v4-shims.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @auth
                @include('partials.sidebar')
            @endauth
            @include('partials.header')



            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include('partials.footer')

    </div> <!-- End of App-->
</body>

</html>