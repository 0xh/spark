<!--DOCTYPE html-->
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro dashboard, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, Laravel, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Metro Dashboard contributor">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('metro/css/metro.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-schemes.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-colors.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/plugins/nanoscroller/css/nanoscroller.css') }}" rel="stylesheet" type="text/css"
    />
    <link href="{{ asset('metro/plugins/bootstrap/css/bootstrap.metro.css') }}" rel="stylesheet" type="text/css"
    />
    <link href="{{ asset('metro/plugins/lightbox/css/lightbox.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('metro/css/docs.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/help.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('metro/js/jquery-2.1.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/metro.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/parsley.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/nanoscroller/js/jquery.nanoscroller.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/jquery.jCombo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/preCode.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/jquery.form.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/lightbox/js/lightbox-2.6.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/docs.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/web.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/help.js') }}" type="text/javascript"></script>

</head>

<body onload="" class="" style="background: #f0f0f2 url(./images/lock/landscape/1ce2ab6d9275b12dcb9db52c1cfdceef28f35efefe4eda9a270d3031ac0c6d3f.jpg) center center no-repeat;">

    @include( 'web.header')

    <div class="page-container op-black">

        <div class="" style="height:100%;">

            @yield('content')

        </div>

    </div>

</body>

</html>