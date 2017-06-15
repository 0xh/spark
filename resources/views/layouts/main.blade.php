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
    <!-- This is the Compiled CSS of Spark and Metro Ui -->
    <link href="{{ mix('css/metroui.css') }}" rel="stylesheet">
    <link href="/css/sweetalert.css" rel="stylesheet">
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
    <!--<link href="{{ mix('css/app.css') }}" rel="stylesheet">-->
    <!-- This is the Compiled CSS of Metro Ui -->
    <!-- Inject Critical CSS -->
    @stack('critical_css')
    <!-- Add Globals For Laravel and Spark -->
    @include('partials.globals')
    <!-- Inject Header JS -->
    @stack('header_js')

</head>

<!-- Body Contents -->

<body 
style="background: #f0f0f2 url(./images/lock/landscape/86a053d7e8fd3c8efeb13ddf1057cc3a31cad70b6724793854ddbc9b8bea0c6a.jpg)
center center no-repeat;"
>
    <div id="spark-app" v-cloak>
        <!-- Top NavBar & SideBar? -->
        <!-- remove nav bar on register -->
        @if(!Request::segment(1)=='register')
        @if (Auth::check()) @include('partials.navbar.user')
        <!--@include('partials.sidebar')-->
        @else @include('partials.navbar.guest') @endif
        @endif
        <!-- Make The Containing Full Screen -->
        <div class="page-container op-black" style="height:100%">
                @yield('content')
                <!-- Application Level Modals -->
                @if (Auth::check()) @include('spark::modals.notifications') @include('spark::modals.support') @include('spark::modals.session-expired')
                @endif
        </div>
    </div>
    @include( 'partials.footer') @stack('footer_js')
    <!-- Combined Scripts Spark and Metro Ui -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/metroui.js') }}"></script>
    <script src="/js/sweetalert.min.js"></script>
</body>

</html>