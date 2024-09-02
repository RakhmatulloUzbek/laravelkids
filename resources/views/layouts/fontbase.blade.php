<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Kids Art-@yield('title')</title>
    <meta name="description" content>
    <meta name="author" content>
    <link rel="shortcut icon" href="{{asset('assets')}}/favicon.ico" type="image/x-icon" />
    <link href="{{asset('assets')}}/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/shortcodes.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" id="layerslider-css" href="{{asset('assets')}}/css/layerslider.css" type="text/css" media="all" />

    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 7]>
    <link href="{{asset('assets')}}/css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet" type="text/css">

    <script src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
    @yield('head')
</head>
<body class="main">

<div class="wrapper">

    @include('home.header')
    <div id="main">
        @yield('slide')

        @yield('content')
    </div>
    @include('home.footer')


</div>
@yield('foot')
    <a href title="Go to Top" class="back-to-top">To Top ↑</a>

    <script data-cfasync="false" src="{{asset('assets')}}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="{{asset('assets')}}/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.inview.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/validation.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/twitter/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/shortcodes.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/custom.js"></script>

    <script type="text/javascript" src="{{asset('assets')}}/js/jquery-transit-modified.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/layerslider.kreaturamedia.jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/greensock.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/layerslider.transitions.js"></script>

    <script type="text/javascript">var lsjQuery = jQuery;</script>
    <script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: '{{asset('assets')}}/js/layerslider/skins/'}) } }); </script>
</body>

</html>
