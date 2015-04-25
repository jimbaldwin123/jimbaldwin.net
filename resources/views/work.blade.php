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
				<br>(Note: these are legacy pages outside my control, nav layout and lightbox are broken.)
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
	</div>
@endsection
