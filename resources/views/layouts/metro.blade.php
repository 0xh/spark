<!--DOCTYPE html-->
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro dashboard, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, Laravel, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Metro Dashboard contributor">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Metro</title>
    <link href="{{ asset('metro/css/metro.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-icons.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-responsive.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-schemes.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/metro-colors.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/font-awesome.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/plugins/bootstrap/css/bootstrap.metro.css')  }}" rel="stylesheet" type="text/css"
    />

    @yield('stylesheet') {!! SiteHelpers::call_css(isset($css)?$css:array()) !!}

    <link href="{{ asset('metro/css/docs.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metro/css/docs-rtl.css')  }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('metro/plugins/tabbehave/behave.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/tabbehave/behave.helper.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/jquery-2.1.3.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/metro.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/bootstrap/js/bootstrap.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/jquery-ui.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/parsley.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/nanoscroller/js/jquery.nanoscroller.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/jquery.jCombo.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/select2.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/preCode.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/jquery.form.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/fancybox/jquery.fancybox.pack.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/countup/countUp.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/plugins/jquery-form/jquery.form.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/wow.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('metro/js/web.js')  }}" type="text/javascript"></script>

    {!! SiteHelpers::call_js(isset($js)?$js:array()) !!}

    <script src="{{ asset('metro/js/docs.js')  }}" type="text/javascript"></script>

    @yield('style')

</head>

<body onload="" class="{{ $appcolor or 'bg-steel' }} " dir="">
    @include( 'layouts/header')
    <div class="page-container metro ">
        <div class="row flex" style="height:100%">
            <div class="cell sidebar-cell" style="height:100%;">
                @include( 'layouts/sidebar' )
            </div>
            <div class="cell auto-size">
                <div class="content-wrapper {{ $maincolor or 'bg-grayLighter' }} ">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    @include( 'layouts/footer')

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
            
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      })
    </script>

    @yield('javascript')

</body>

</html>