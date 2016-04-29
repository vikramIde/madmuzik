<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title><meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700' rel='stylesheet' type='text/css' />
	<!--  -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('/css/main.css')}}" />
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/jquery.flexslider.min.js')}}"></script>
	<script src="{{asset('/js/scripts.js')}}"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<style>
	.g-background-default {
				background-color: #F69028 !important;
	}
	</style>
</head>
<body>

	<div class="">
	@include('website.menu')

	@yield('content')

	@include('website.footer')
	</div>
</body>
</html>