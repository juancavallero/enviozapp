<head>
    <base #href=""/>
    <!-- Basic Page Needs
     ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>EnvioZapp</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- Web Font
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
    <!-- CSS ================================================== -->
    <!-- Theme Color
    ============================================= -->
    <link rel="stylesheet" id="color" href="{{asset('web/css/yellow.css')}}">
    <!-- Medicom Style
    ============================================= -->
    <link rel="stylesheet" href="{{asset('web/css/medicom.css')}}">
    <!-- This page
    ============================================= -->
    <link href="{{asset('web/css/revolution_style.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/settings.css')}}" rel="stylesheet">
    <!-- Bootstrap
    ============================================= -->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.css')}}">
    <!-- Theme Skin
    ============================================= -->
    <link href="{{asset('web/css/light.css')}}" rel="stylesheet" id="choose-theme">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('web/plugins/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/plugins/owlcarousel/assets/owl.theme.default.min.css')}}">

    <link href="{{asset('web/css/custom.css')}}" rel="stylesheet" type="text/css" />

    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Header Scripts
    ================================================== -->
    <script src="{{asset('web/js/modernizr-2.6.2.min.js')}}"></script>
    <script type="text/javascript">
        var baseurl = '{{URL::to('/')}}';
    </script>
</head>


