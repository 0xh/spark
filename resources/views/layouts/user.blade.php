<!--DOCTYPE html-->
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro dashboard, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, Laravel, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Metro Dashboard contributor">

    <title>Admin Metro</title>
    <link href="{{ asset( 'metro/css/metro.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset( 'metro/css/metro-icons.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset( 'metro/css/metro-responsive.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset( 'metro/css/metro-schemes.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset( 'metro/css/font-awesome.css')  }}" rel="stylesheet" type="text/css" /> {!! SiteHelpers::call_css(isset($css)?$css:array()) !!}
    <link href="{{ asset( 'metro/css/docs.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset( 'metro/css/docs-rtl.css')  }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset( 'metro/js/jquery-2.1.3.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset( 'metro/js/metro.js')  }}" type="text/javascript"></script>
    <script src="{{ asset( 'metro/plugins/parsley.js')  }}" type="text/javascript"></script>
    <script src="{{ asset( 'metro/js/jquery.form.js')  }}" type="text/javascript"></script>
    <script src="{{ asset( 'metro/plugins/moment/moment.js')  }}" type="text/javascript"></script>
    <script src="{{ asset( 'metro/js/docs.js')  }}" type="text/javascript"></script>
    {!! SiteHelpers::call_js(isset($js)?$js:array()) !!}


</head>

<body onload="init();" class="{{ $appcolor or 'bg-steel' }} " dir="">
    <div id="user-body">

        @yield('content')

    </div>

    <script type='text/javascript'>
        jQuery(document).ready(function ($) {
			<?php   
				
				$notify = Session::get('notify');
            if (Session::has('message') ){
            $notify['caption'] = Session::get('message');
            $notify['type'] = 'info';
        }
			?>
            $.Notify({
                content: '<?php echo $notify['caption'];?>',
                type: '<?php echo $notify['type'] ?>',
                shadow: true
            })
		})
    </script>

</body>

</html>