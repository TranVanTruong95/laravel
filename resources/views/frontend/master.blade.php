<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SimpleOne - A Responsive Html5 Ecommerce Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('public/frontend/css/bootstrap.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/bootstrap-responsive.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/flexslider.css') !!}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{!! url('public/frontend/css/jquery.fancybox.css') !!}" rel="stylesheet">
<link href="{!! url('public/frontend/css/cloud-zoom.css') !!}" rel="stylesheet">
<link href="{!! url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{!! url('public/css/mystyle.css') !!}">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>
  @include('frontend.block.header')
  <div class="container">
    @include('frontend.block.nav')
  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <!-- Slider Start-->
    @yield('slider')
  <!-- Slider End-->
  
  <!-- Section Start-->
    @yield('ortherdetail')
  <!-- Section End-->
  
  @yield('content')

  </div>

<!-- Footer -->
<footer id="footer">
  @include('frontend.block.contact')
  @include('frontend.block.footerlink')
  @include('frontend.block.coppyright')
</footer>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('public/frontend/js/jquery.js') !!}"></script>
<script src="{!! url('public/frontend/js/bootstrap.js') !!}"></script>
<script src="{!! url('public/frontend/js/respond.min.js') !!}"></script>
<script src="{!! url('public/frontend/js/application.js') !!}"></script>
<script src="{!! url('public/frontend/js/bootstrap-tooltip.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/jquery.fancybox.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/jquery.flexslider.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/frontend/js/jquery.tweet.js') !!}"></script>
<script  src="{!! url('public/frontend/js/cloud-zoom.1.0.2.js') !!}"></script>
<script  type="text/javascript" src="{!! url('public/frontend/js/jquery.validate.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.carouFredSel-6.1.0-packed.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.mousewheel.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.touchSwipe.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/frontend/js/jquery.ba-throttle-debounce.min.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/custom.js') !!}"></script>
<script defer src="{!! url('public/frontend/js/myscript.js') !!}"></script>
</body>
</html>