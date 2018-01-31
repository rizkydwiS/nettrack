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
				<div class="row content-heading"><h4>@yield('heading')</h4></div>	
				<div class="content-wrap-well">
					@yield('content')
				</div>
			</div>
		</div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
</body>
</html>