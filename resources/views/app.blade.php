<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title></title>

		<link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('/assets/js/modernizr.min.js')}}"></script>
	</head>
	<body>
	@yield('content')
	
	
			<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/js/detect.js')}}"></script>
        <script src="{{asset('/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('/assets/js/waves.js')}}"></script>
        <script src="{{asset('/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.scrollTo.min.js')}}"></script>


        <script src="{{asset('/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.app.js')}}"></script>
		<script>
		$(document).ready(function () {
    $("ul.navbar-nav>li").on("click", "a", function (event) {
        debugger;
        event.preventDefault();
        $("#main-nav .active").removeClass("active");
        $(this).addClass("active");
    });
});
		</script>

	</body>

</html>