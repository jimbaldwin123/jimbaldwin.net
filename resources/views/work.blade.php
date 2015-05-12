@extends('app')

@section('content')
	<div class="container">
		<h2>Work Samples</h2>
		<h2 class="demo">Sites (click to enlarge)</h2>
		<ul class="section gallery clearfix">
		
		@foreach($screenshots as $screenshot)
			<li><a class="fancybox" rel="group" href="/images/{{ $screenshot->large_image }}"><img height="166" src="/images/{{ $screenshot->thumb_image }}" alt="{{ $screenshot->title }}"  title="{{ $screenshot->title }}" /></a></li></a>
		@endforeach
		
		</ul>
		<p>
			I wrote a content management system for these sites from scratch (without any frameworks).
			The sites had a combined 20 million page views per month, 5 million visitors.
			The back end supported 12 editorial and 6 graphics producers, and served about 10,000
			pages and 20,000 images.
		</p>
		<p>
			I wrote a content syndication module which used various standard and custom protocols (XML, REST, JSON)
			for inbound and outbound syndication with MSNBC, Yahoo, Fox News, US News, redOrbit, and other partners.
		</p>			
		<h2 class="demo">PHP</h2>
		<ul class="section">		
			<li>
				<a href="http://todo.jimbaldwin.net">TODO app in Laravel 5</a> &ndash; In progress, see todo list in app for future enhancements.
				<ul>
					<li><a href="https://github.com/jimbaldwin123/todo-app">GitHub repo</a></li>
				</ul>
			</li>
			<li>
				<a href="http://services.jimbaldwin.net">Simple REST API without framework</a>
				<ul>
					<li><a href="https://github.com/jimbaldwin123/rest-api">GitHub repo</a></li>
				</ul>
			</li>
		</ul>
		<h2 class="demo">JavaScript</h2>
		<ul class="section">
			<li>JSON-driven JavaScript animation &ndash; Annotated software product screen shots
				<br>(Note: these are legacy pages outside my control, nav layout and lightbox are broken. However, page rendering from JSON works.)
				<br>Hover over "info" arrows for callouts.
				<ul>
					<li><a href="http://utility2012.apcon.com/products/enterpoint.php">Animated Screen Shot 1</a></li>
					<li><a href="http://utility2012.apcon.com/products/webx.php">Animated Screen Shot 2</a></li>
					<li><a href="http://utility2012.apcon.com/products/netvis.php">Animated Screen Shot 3</a></li>
					<li>
						<a href="docs/JSON-callouts.zip">Code</a>
					</li>
				</ul>
			</li>
			<li><a href="/switchbuilder">jQuery/AJAX Demo - Screencast</a></li>
		</ul>
		<h2 class="demo">Documentation</h2>
		<ul class="section">
			<li><a href="docs/Support_Site_Requirements.docx">Support Site Requirements</a>
				&ndash; Requirements for customer support site as-built, intended to initiate stakeholder redesign discussion.
			</li>
			<li><a href="docs/Support_Site_Screens.docx">Support Site Screens</a> &ndash; Some jQuery/AJAX functionality</li>
			
		</ul>
		<h2 class="demo">Social</h2>
		<div class="section">
				<script>
					window.fbAsyncInit = function() {
					  FB.init({
						appId      : '883071591739100',
						xfbml      : true,
						version    : 'v2.3'
					  });
					};
				  
					(function(d, s, id){
					   var js, fjs = d.getElementsByTagName(s)[0];
					   if (d.getElementById(id)) {return;}
					   js = d.createElement(s); js.id = id;
					   js.src = "//connect.facebook.net/en_US/sdk.js";
					   fjs.parentNode.insertBefore(js, fjs);
					 }(document, 'script', 'facebook-jssdk'));
				</script>
				<div
				  class="fb-like"
				  data-share="true"
				  data-width="450"
				  data-show-faces="true">
				</div>				
		</div>

	</div>

@endsection
