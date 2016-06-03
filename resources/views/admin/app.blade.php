<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home Page</title>
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700' rel='stylesheet' type='text/css' />
	<!--  -->
	<link rel="stylesheet" href="{{asset('/css/admin/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('/css/admin/components.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/core.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/icons.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/morris.css')}}" />
<link rel="stylesheet" href="{{asset('/css/admin/pages.css')}}" />
	<link rel="stylesheet" href="{{asset('/css/admin/responsive.css')}}" />
		<link href="{{asset('/css/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('/css/admin/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('/css/admin/bootstrap-datepicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('/css/admin/jquery-clockpicker.min.css')}}" rel="stylesheet">
		<link href="{{asset('/css/admin/daterangepicker.css')}}" rel="stylesheet">
	
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
	      
        
        <!-- jQuery  -->
        <script src="{{asset('/js/admin/jquery.min.js')}}"></script>
        <script src="{{asset('/js/admin/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
       <!-- <script src="{{asset('/js/admin/detect.js')}}"></script>
        <script src="{{asset('/js/admin/fastclick.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.blockUI.js')}}"></script> 
        <script src="{{asset('/js/admin/waves.js')}}"></script>
        <script src="{{asset('/js/admin/wow.min.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.core.js')}}"></script>-->
        <script src="{{asset('/js/admin/jquery.app.js')}}"></script>
		
        <script src="{{asset('/js/admin/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.waypoints.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('/js/admin/morris.min.js')}}"></script>
        <script src="{{asset('/js/admin/raphael-min.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.knob.js')}}"></script>
        <script src="{{asset('/js/admin/jquery.dashboard.js')}}"></script>
	
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>
        	<script src="{{asset('/js/admin/bootstrap-timepicker.min.js')}}"></script>
     	<script src="{{asset('/js/admin/bootstrap-colorpicker.min.js')}}"></script>
     	<script src="{{asset('/js/admin/bootstrap-datepicker.min.js')}}"></script>
     	<script src="{{asset('/js/admin/jquery-clockpicker.min.js')}}"></script>
     	<script src="{{asset('/js/admin/daterangepicker.js')}}"></script>
        
        <script>
			jQuery(document).ready(function() {

				// Time Picker
				jQuery('#timepicker').timepicker({
					defaultTIme : false
				});
				jQuery('#timepicker2').timepicker({
					showMeridian : false
				});
				jQuery('#timepicker3').timepicker({
					minuteStep : 15
				});
				
				//colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();
                
                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-autoclose').datepicker({
                	autoclose: true,
                	todayHighlight: true
                });
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple-date').datepicker({
                    format: "mm/dd/yyyy",
					clearBtn: true,
					multidate: true,
					multidateSeparator: ","
                });
                jQuery('#date-range').datepicker({
                    toggleActive: true
                });
                
                //Clock Picker
                $('.clockpicker').clockpicker({
                	donetext: 'Done'
                });
                
                $('#single-input').clockpicker({
				    placement: 'bottom',
				    align: 'left',
				    autoclose: true,
				    'default': 'now'
				});
				$('#check-minutes').click(function(e){
				    // Have to stop propagation here
				    e.stopPropagation();
				    $("#single-input").clockpicker('show')
				            .clockpicker('toggleView', 'minutes');
				});
				
				
				//Date range picker
				$('.input-daterange-datepicker').daterangepicker({
					buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white'
				});
		        $('.input-daterange-timepicker').daterangepicker({
		            timePicker: true,
		            format: 'MM/DD/YYYY h:mm A',
		            timePickerIncrement: 30,
		            timePicker12Hour: true,
		            timePickerSeconds: false,
		            buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white'
		        });
		        $('.input-limit-datepicker').daterangepicker({
		            format: 'MM/DD/YYYY',
		            minDate: '06/01/2015',
		            maxDate: '06/30/2015',
		            buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white',
		            dateLimit: {
		                days: 6
		            }
		        });
		
		        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
		
		        $('#reportrange').daterangepicker({
		            format: 'MM/DD/YYYY',
		            startDate: moment().subtract(29, 'days'),
		            endDate: moment(),
		            minDate: '01/01/2012',
		            maxDate: '12/31/2015',
		            dateLimit: {
		                days: 60
		            },
		            showDropdowns: true,
		            showWeekNumbers: true,
		            timePicker: false,
		            timePickerIncrement: 1,
		            timePicker12Hour: true,
		            ranges: {
		                'Today': [moment(), moment()],
		                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
		                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		                'This Month': [moment().startOf('month'), moment().endOf('month')],
		                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		            },
		            opens: 'left',
		            drops: 'down',
		            buttonClasses: ['btn', 'btn-sm'],
		            applyClass: 'btn-default',
		            cancelClass: 'btn-white',
		            separator: ' to ',
		            locale: {
		                applyLabel: 'Submit',
		                cancelLabel: 'Cancel',
		                fromLabel: 'From',
		                toLabel: 'To',
		                customRangeLabel: 'Custom',
		                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		                firstDay: 1
		            }
		        }, function (start, end, label) {
		            console.log(start.toISOString(), end.toISOString(), label);
		            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		        });
				
			});
		</script>
</body>
</html>