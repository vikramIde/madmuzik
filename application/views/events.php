<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Events</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="#">Home</a> <i class="fa fa-angle-double-right"></i> Events</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Events</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<!-- events -->
					<div class="col-md-9">
						<h2>
							Upcoming <span>Events</span> 
							<span class="view">
								<span>View</span> 
								<a href="#grid"><i class="fa fa-lg fa-th"></i></a>
								<a href="#list" class="current"><i class="fa fa-lg fa-list"></i></a>
							</span>
						</h2>

						<div id="upcoming-events" class="list-style">
							<div class="row">
								<div class="col-md-4 event">
									<div class="event-image">
										<div class="event-date">
											<span class="day-of-month">08</span>
											<span class="day-of-week">wed</span>
										</div>
										<a href="#"><img src="images/photos/photo1.jpg" alt="Bridgestone Arena" /></a>
									</div>
									<h3><a href="event-details.html">Bridgestone Arena</a></h3>
									<div class="event-location">
										<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
										<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
									</div>
									<p>
										Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
									</p>
									<a href="#" class="buy-now">Buy Now</a>
								</div>

								<div class="col-md-4 event">
									<div class="event-image">
										<div class="event-date">
											<span class="day-of-month">09</span>
											<span class="day-of-week">thu</span>
										</div>
										<a href="#"><img src="images/photos/photo2.jpg" alt="Night Inspirescu Party" /></a>
									</div>
									<h3><a href="event-details.html">Night Inspirescu Party</a></h3>
									<div class="event-location">
										<span class="location"><i class="fa fa-map-marker"></i> La Mania Club</span>
										<span class="time"><i class="fa fa-clock-o"></i> All Day</span>
									</div>
									<p>
										Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
									</p>
									<span class="sold-out">Sold Out</span>
								</div>

								<div class="col-md-4 event">
									<div class="event-image">
										<div class="event-date">
											<span class="day-of-month">12</span>
											<span class="day-of-week">tue</span>
										</div>
										<a href="#"><img src="images/photos/photo3.jpg" alt="Dj Robag Ruhme" /></a>
									</div>
									<h3><a href="event-details.html">Dj Robag Ruhme</a></h3>
									<div class="event-location">
										<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
										<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
									</div>
									<p>
										Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
									</p>
									<a href="#" class="watch-live">Watch Live</a>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 event">
									<div class="event-image">
										<div class="event-date">
											<span class="day-of-month">08</span>
											<span class="day-of-week">wed</span>
										</div>
										<a href="#"><img src="images/photos/photo1.jpg" alt="Bridgestone Arena" /></a>
									</div>
									<h3><a href="event-details.html">Bridgestone Arena</a></h3>
									<div class="event-location">
										<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
										<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
									</div>
									<p>
										Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
									</p>
									<a href="#" class="buy-now">Buy Now</a>
								</div>

								<div class="col-md-4 event">
									<div class="event-image">
										<div class="event-date">
											<span class="day-of-month">09</span>
											<span class="day-of-week">thu</span>
										</div>
										<a href="#"><img src="images/photos/photo2.jpg" alt="Night Inspirescu Party" /></a>
									</div>
									<h3><a href="event-details.html">Night Inspirescu Party</a></h3>
									<div class="event-location">
										<span class="location"><i class="fa fa-map-marker"></i> La Mania Club</span>
										<span class="time"><i class="fa fa-clock-o"></i> All Day</span>
									</div>
									<p>
										Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
									</p>
									<span class="sold-out">Sold Out</span>
								</div>

								<div class="col-md-4 event">
									<div class="event-image">
										<div class="event-date">
											<span class="day-of-month">12</span>
											<span class="day-of-week">tue</span>
										</div>
										<a href="#"><img src="images/photos/photo3.jpg" alt="Dj Robag Ruhme" /></a>
									</div>
									<h3><a href="event-details.html">Dj Robag Ruhme</a></h3>
									<div class="event-location">
										<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
										<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
									</div>
									<p>
										Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
									</p>
									<a href="#" class="watch-live">Watch Live</a>
								</div>
							</div>
						</div>

						<ul class="events-pagination pagination">
							<li class="current"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
						</ul>
					</div>

					<!-- sidebar -->
					<div class="col-md-3">
						<h2>Latest <span>Videos</span></h2>
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="images/photos/photo12.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Simple Session</h4>
										<p>9-October-2013</p>
									</div>
								</div>
							</a>
						</div>

						<h2>Latest <span>Album</span></h2>
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="images/photos/photo13.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Large Worldwide</h4>
										<p>Deep House, Pop/Rock</p>
									</div>
								</div>
							</a>
						</div>

						<h2>Latest <span>Gallery</span></h2>
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="images/photos/photo15.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-camera"></i>
										</div>
										<h4>Sixth Element Club</h4>
										<p>@Oslo, Norway</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->

	 <?php
 $this->load->view('footer');
?>
</body>
</html>