<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Event Details</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> <a href="events.html">Events</a> <i class="fa fa-angle-double-right"></i> Event Details</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Event Details</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<!-- photo slider -->
					<div class="col-xs-12">
						<ul class="share">
							<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
						</ul>

						<div class="flexslider event-gallery">
							<ul class="slides">
								<li>
									<img src="images/photos/photo1.jpg" alt="" />
								</li>
								<li>
									<img src="images/photos/photo8.jpg" alt="" />
								</li>
								<li>
									<img src="images/photos/photo3.jpg" alt="" />
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row event-info">
					<div class="col-sm-4">
						<h3 class="event-details">Details</h3>
						<dl class="dl-horizontal">
							<dt>Date :</dt>    			<dd>18/1/2014</dd>
							<dt>Time :</dt>    			<dd>20:00
							<dt>Address :</dt>     		<dd><p>Level 13, 2 Elizabeth St, <br />
							Melbourne Victoria 3000 <br />
							Australia<p></dd>
							<dt>Tickets :</dt>    		<dd><a href="#">contact@awaaz.com</a></dd>
							<dt>Tel. :</dt>     		<dd>(123) 563-1234-567</dd>
							<dt>Categories :</dt>    	<dd>Festivals</dd>
						</dl>

						<div class="action-buttons">
							<a href="#">Buy Now</a>
							<a href="#">Amazon</a>
						</div>
					</div>
					<div class="col-sm-8">
						<h3 class="event-desc">Description</h3>
						<h3>Night of the living fest</h3>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam volutpat arcu quis pretium imperdiet. Nam rhoncus et eros quis convallis. Maecenas commodo egestas sodales. Morbi iaculis turpis in nulla venenatis, at placerat metus consectetur. Nulla consequat iaculis suscipit. Praesent nisl augue, ullamcorper at tortor sed, tempus laoreet magna. Quisque dictum enim orci, in fermentum nulla bibendum at.</p>
						<p>Aenean aliquet accumsan rutrum. Phasellus at venenatis sapien. Proin fringilla dapibus lectus, consectetur lobortis lacus congue sit amet. Aliquam vestibulum, erat ac tincidunt euismod, diam elit condimentum tortor, ut accumsan ante ligula id lectus. Nam quis eros pretium, aliquam lorem sed, euismod sem. Nunc vehicula ante vitae urna pretium, at lobortis dolor rhoncus. Maecenas at massa venenatis mi vestibulum rhoncus ac in metus.</p>
						<p>Nam consectetur nulla vitae mi luctus, non pretium diam condimentum. Aliquam in justo ac erat iaculis faucibus. Nulla vitae lorem consequat, commodo dolor et, feugiat lorem. Proin adipiscing feugiat dui non posuere. Curabitur nec mi at purus pharetra luctus egestas vitae felis.</p>
						<p>Fusce sodales, tellus vitae commodo porta, turpis felis venenatis justo, nec malesuada risus turpis ac arcu. Aenean tincidunt eget sapien ac placerat. Vivamus commodo consequat varius.</p>
					</div>
				</div>

				<!-- event location -->
				<h2>Event <span>Location</span></h2>
				<div class="row">
					<div class="col-lg-12 map-container">
						<div id="gmap"></div>
						<div class="info">
							<div class="arrow"></div>
							<p>
								Level 13, 2 Elizabeth St,<br/>
								Melbourne Victoria 3000 <br />
								Australia
							</p>
						</div>
					</div>
				</div>

				<!-- featured events -->
				<h2>Featured <span>Events</span></h2>
				<div class="row">
					<div class="col-sm-6 col-md-3 event">
						<div class="event-image">
							<div class="event-date">
								<span class="day-of-month">12</span>
								<span class="day-of-week">tue</span>
							</div>
							<a href="#"><img src="images/photos/photo3.jpg" alt="Dj Robag Ruhme" /></a>
						</div>
						<h3><a href="#">Dj Robag Ruhme</a></h3>
						<div class="event-location">
							<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
							<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
						</div>
						<p>
							Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
						</p>
						<a href="#" class="watch-live">Watch Live</a>
					</div>
					<div class="col-sm-6 col-md-3 event">
						<div class="event-image">
							<div class="event-date">
								<span class="day-of-month">09</span>
								<span class="day-of-week">sat</span>
							</div>
							<a href="#"><img src="images/photos/photo1.jpg" alt="Dj Robag Ruhme" /></a>
						</div>
						<h3><a href="#">Dj Robag Ruhme</a></h3>
						<div class="event-location">
							<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
							<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
						</div>
						<p>
							Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
						</p>
						<a href="#" class="buy-now">Buy Now</a>
					</div>
					<div class="col-sm-6 col-md-3 event">
						<div class="event-image">
							<div class="event-date">
								<span class="day-of-month">08</span>
								<span class="day-of-week">thu</span>
							</div>
							<a href="#"><img src="images/photos/photo2.jpg" alt="Dj Robag Ruhme" /></a>
						</div>
						<h3><a href="#">Dj Robag Ruhme</a></h3>
						<div class="event-location">
							<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
							<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
						</div>
						<p>
							Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
						</p>
						<a href="#" class="buy-now">Buy Now</a>
					</div>
					<div class="col-sm-6 col-md-3 event">
						<div class="event-image">
							<div class="event-date">
								<span class="day-of-month">09</span>
								<span class="day-of-week">wed</span>
							</div>
							<a href="#"><img src="images/photos/photo3.jpg" alt="Dj Robag Ruhme" /></a>
						</div>
						<h3><a href="#">Dj Robag Ruhme</a></h3>
						<div class="event-location">
							<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
							<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
						</div>
						<p>
							Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
						</p>
						<a href="#" class="buy-now">Buy Now</a>
					</div>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->


	<!-- google maps script -->
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
				};

				map = new google.maps.Map(document.getElementById("gmap"),
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
	 <?php
 $this->load->view('footer');
?>
</body>
</html>