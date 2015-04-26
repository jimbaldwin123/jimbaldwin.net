<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Developer, Portland, Or | LAMP Stack Web Developer | Jim Baldwin</title>
	<meta name="description" content="LAMP Stack Web Developer in Portland, OR. Web Sites, MVC, REST" >
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body { font-family: 'Open Sans', arial, sans-serif;}
		h1 { font-family: jeannie_font, sans-serif;}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/work') }}">Work Samples</a></li>
					<li><a href="{{ url('/resume') }}">Resume</a></li>
				</ul>
<!--
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
-->
			</div>
		</div>
	</nav>

	<div class="background">
		<h1>Jim Baldwin - <br class="rwd-break">Web Developer</h1>
		<h2 class="subhead">PHP &bull; SQL &bull; HTML5 &bull; CSS3 &bull; JavaScript &bull; jQuery &bull; MVC &bull; REST</h2>
		
	</div>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- Add fancyBox -->
	<script type="text/javascript" src="/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	
	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<script type="text/javascript" src="/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<script>
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-38559217-1', 'auto');
	  ga('send', 'pageview');
	</script>

</body>
</html>
