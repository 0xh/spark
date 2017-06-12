<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

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
    <!-- We need to recompile our assets to use metro-ui with bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
     @stack('css')
     <!-- Example How to Use it On Child Template -->
     <!--@push('css')
    <script>
        ...do some stuff here that this view needs...

    </script>
    @endpush-->

     @stack('header_js')
    <!-- Example How to Use it On Child Template -->
     <!--@push('header_js')
    <script>
        ...do some stuff here that this view needs...

    </script>
    @endpush-->

    <!-- Core Script In App -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ])!!};
    </script>
</head>

<!-- Body Contents -->
<body>
    <div id="app">
        @include('nav')

        <!--We Should Only Show this Section If There is an Auth user-->
        @section('sidebar')

        <!--To Append Anything To Your Child Template You Can Do This-->

        <!--@section('sidebar') @parent
        <p>This is appended to the master sidebar.</p>
        @endsection-->
        
        @show

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     @stack('footer_js')
</body>

</html>