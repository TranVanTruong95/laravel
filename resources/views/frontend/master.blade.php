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
    @include('frontend.block.search')
    <div id="wrapper">
        <div class="container">
            <div id="header">

                @include('frontend.block.nav')
            </div>
            <!-- Header End -->

            <div id="maincontainer">
                @yield('slider')
                @yield('ortherdetail')
                @yield('content')
            </div>
        </div>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1268055039943553";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58c218412dfdd91cf6ef0984/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>