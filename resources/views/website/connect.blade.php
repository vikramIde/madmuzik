@extends('website.app')
@section('content')

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Contact Us</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Contact Us</h1>
			<h4>Let's keep in touch</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 contact-desc center">
						<p>Nullam eu lectus et tellus malesuada bibendum sed a nisl. Praesent iaculis sem nisi, sed molestie est ullamcorper vitae. Praesent ac tincidunt eros. Duis eget urna convallis, faucibus magna vel, auctor justo. Proin et scelerisque dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<h2>Send us a message</h2>
						<form action="mail.php" method="post" name="contact-form" id="contact-form">
							<label for="name">Your Name <span>*</span></label>
							<input type="text" name="name" id="name" value="" required />
							<label for="email">Your E-Mail <span>*</span></label>
							<input type="email" name="email" id="email" value="" required />
							<label for="email">Subject</label>
							<input type="text" name="subject" id="subject" value="" />
							<label for="message">Your Message</label>
							<textarea name="message" id="message"></textarea>
							<div class="row">
								<div class="col-sm-6">
									<input type="submit" name="sendmessage" id="sendmessage" value="Send Message" />
								</div>
								<div class="col-sm-6 dynamic"></div>
							</div>
						</form>
					</div>
					<div class="col-sm-6">
						<h2>Address &amp; contact details</h2>
						<div class="contact-details">
							<div class="icon">
								<i class="fa fa-4x fa-map-marker"></i>
							</div>
							<p>
								8901 Marmora Road,<br />
								Glasgow, D04 89GR.
							</p>
						</div>
						<div class="contact-details">
							<div class="icon">
								<i class="fa fa-4x fa-phone-square"></i>
							</div>
							<p>
								(123) 123-4566-234<br />
								(123) 536-7472-983
							</p>
						</div>
						<div class="contact-details">
							<div class="icon">
								<i class="fa fa-4x fa-envelope"></i>
							</div>
							<p>
								contact@awaaz.com<br />
								infa@awaaz.com
							</p>
						</div>
					</div>
				</div>

				<div id="contact-map-container">
					<div id="contact-map"></div>
					<div class="address">
						<h1>Madmuzik</h1>
						<p>
							Level 13, 2 Elizabeth St.<br />
							Melbourne Victoria,<br />
							3001 Ahmedabd
						</p>
					</div>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->

	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			var map;
			var latlng = new google.maps.LatLng(23.042817, 72.5672);
			function initialize() {
				var mapOptions = {
					'center': latlng,
					'zoomControl': false,
					'panControl': false,
					'streetViewControl': false,	
					'zoom': 11,
					'scrollwheel': false,
					'draggable': false,	
					'mapTypeControl': false,	
				};

				map = new google.maps.Map(document.getElementById("contact-map"),
					mapOptions);

				var marker = new google.maps.Marker({
					position: latlng,
					title:""
				});

				// To add the marker to the map, call setMap();
				marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(latlng);
			});
		});
	</script>
	@endsection