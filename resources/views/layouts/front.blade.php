<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.css')}}">
</head>
<body>
@include('layouts.partials.navbar')

@yield('banner')

<div class="container">

	<div class="row">
	@section('category')
		@include('layouts.partials.category')
	@show
			<div class="col-md-9">
				<div class="row content-heading"><h4>&nbsp;&nbsp;&nbsp;@yield('heading')</h4></div>	
				<div class="content-wrap-well">
					@yield('content')
				</div>
			</div>
		</div>
</div>
<footer>
	<div class="footer-color">
	<hr>
	 	<div id="footer" class="container text-center">
		    <br>
		    Copyright © 2018 Network Track • Made with Laravel
		    <br>
		    <a href="https://github.com/dwictator"><i class="fa fa-github"></i></a>
		    <a href="https://instagram.com/dwict_"><i class="fa fa-instagram"></i></a>
		    <a href="https://facebook.com/rizky.s.522"><i class="fa fa-facebook"></i></a>
    		<br><br>
		</div>
	</div>
</footer>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
</body>
</html>