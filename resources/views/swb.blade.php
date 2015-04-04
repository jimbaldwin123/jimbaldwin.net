@extends('app')

@section('content')
	<div style="width: 760px; margin: auto;">
		<strong>
			<ul>
				<li>Javascript and CSS animation</li>
				<li>AJAX reads algorithm logic from MySQL database</li>
				<li>PDFLib output</li>
			</ul> 
		</strong>
	</div>
	<div style="width: 960px; margin: auto; border: 1px solid #aaa;"><video id="vid" controls="controls" autoplay="autoplay" preload="none" style="width: 960px; height: 720px;"> <source src="/video/swb7.mp4" type="video/mp4" />
	<p>Your browser does not support H.264/MP4.</p>
	</video> <!--[if IE]>
	<div><button onclick="$('#vid').get(0).play()">Play</button>&nbsp; <button onclick="$('#vid').get(0).pause()">Pause</button></div>
	<![endif]--></div></div>
@endsection