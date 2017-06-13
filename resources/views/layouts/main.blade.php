<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<!-- This Template is For Homepage -->
<!-- Head Contents -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Added To the Default Spark Template -->
    <meta name="description" content="{{ config('seo.description', 'Laravel') }}">
    <meta name="keywords" content="{{ config('seo.keywords', 'Laravel') }}">
    <meta name="author" content="{{ config('seo.author', 'Laravel') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- This is the Compiled CSS of Spark -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!-- This is the Compiled CSS of Metro Ui -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
     <!-- Inject Critical CSS -->
     @stack('critical_css')
    <!-- Inject Header JS -->
     @stack('header_js')
    <!-- Add Globals For Laravel and Spark -->
    @include('partials.globals')
</head>

<!-- Body Contents -->
<body onload="" class="" style="background: #f0f0f2 url(./images/lock/landscape/86a053d7e8fd3c8efeb13ddf1057cc3a31cad70b6724793854ddbc9b8bea0c6a.jpg) center center no-repeat;">
<!--<body class="bg-white">-->
        <!-- Top NavBar -->
        @if (Auth::check())
        @include('partials.navbar.user') 
        @include('partials.sidebar')
        @else
        @include('partials.navbar.guest') 
        @endif
            @yield('content')
    @include( 'partials.footer')
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    <!-- All Javascript Dependencies of Metro Ui -->
    <script src="{{ asset('js/main.js') }}"></script>
     @stack('footer_js')
</body>

</html>