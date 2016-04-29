<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700' rel='stylesheet' type='text/css' />
    <!--  -->
    <link rel="stylesheet" href="{{asset('/css/admin/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/admin/components.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/core.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/icons.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/morris.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/pages.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/admin/responsive.css')}}" />

    
    <style>
    .g-background-default {
                background-color: #F69028 !important;
    }
    </style>
</head>
<body>

    <div class="">
    @include('admin.menu')

    @yield('content')

    @include('admin.footer')
    </div>
          <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
        <script src="{{asset('/js/admin/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/admin/detect.js')}}"></script>
        <script src="{{asset('/js/admin/fastclick.js')}}"></script>

        <script src="{{asset('/js/admin/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.blockUI.js')}}"></script>
        <script src="{{asset('/js/admin/waves.js')}}"></script>
        <script src="{{asset('/js/admin/wow.min.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('/js/admin/peity/jquery.peity.min.js')}}"></script>

        <!-- jQuery  -->
        <script src="{{asset('/js/admin/jquery.waypoints.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.counterup.min.js')}}"></script>



        <script src="{{asset('/js/admin/morris.min.js')}}"></script>
        <script src="{{asset('/js/admin/raphael-min.js')}}"></script>

        <script src="{{asset('/js/admin/jquery.knob.js')}}"></script>

        <script src="{{asset('/js/admin/jquery.dashboard.js')}}"></script>

        <script src="{{asset('/js/admin/jquery.core.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.app.js')}}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>

</body>
</html>