<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') - {{ config('app.name', 'ZainBlog') }}</title>


    <!-- Fonts -->
    

    <!-- Styles -->
    <link href= "{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">

    <link href= "{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

    <link href= "{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet">


    @stack('css')
    
</head>
<body>

@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')

    <script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/swiper.js"></script>

	<script src="common-js/scripts.js"></script>

@stack('js')

</body>
</html>
