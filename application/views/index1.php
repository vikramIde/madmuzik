<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 $this->load->view('header');
?>

	<!-- Banner Slider -->
	<section id="banner">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="container">
						<h1>Awaaz the largest music theme</h1>
						<p>Awaaz is a powerful and responsive Music, Band &amp; DJ HTML Template with pretty much advanced features like display Artists, Albums, Photo Galleries, Video Galleries and Events. </p>
						<a href="#" class="action-button">Buy Template</a>
					</div>
				</li> <!-- end slide 1 -->
				<li>
					<div class="container">
						<h1>Tons of pages included</h1>
						<p>Awaaz is a powerful and responsive Music, Band &amp; DJ HTML Template with pretty much advanced features like display Artists, Albums, Photo Galleries, Video Galleries and Events. </p>
						<a href="#" class="action-button">View Pages</a>
					</div>
				</li> <!-- end slide 2 -->
				<li>
					<div class="container">
						<h1>Fully responsive grid layout</h1>
						<p>Awaaz is a powerful and responsive Music, Band &amp; DJ HTML Template with pretty much advanced features like display Artists, Albums, Photo Galleries, Video Galleries and Events. </p>
						<a href="#" class="action-button">Preview</a>
					</div>
				</li> <!-- end slide 3 -->
			</ul>
		</div>
	</section>

	<!-- features area -->
	<section id="features">
		<div class="container">
			<!-- welcome message -->
			<div class="welcome-message">
				<h2>Welcome to <span>Awaaz Music</span> Theme</h2>
				<p>Lbendum elit, eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. aliquam eget <span>molestie nec, gravida ut sapien.</span></p>
			</div> <!-- end welcome message -->

			<!-- features -->
			<div class="features">
				<div class="row">
					<div class="col-sm-4 feature">
						<div class="feature-icon">
							<i class="feature-icon fa fa-calendar"></i>
						</div>
						<h3>Events</h3>
						<p>Eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst mauris.</p>
					</div> <!-- end feature 1 -->
					<div class="col-sm-4 feature">
						<div class="feature-icon">
							<i class="feature-icon fa fa-music"></i>
						</div>
						<h3>Albums</h3>
						<p>Bendum elit, eu euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac mauris.</p>
					</div> <!-- end feature 3 -->
					<div class="col-sm-4 feature">
						<div class="feature-icon">
							<i class="feature-icon fa fa-headphones"></i>
						</div>
						<h3>Artists</h3>
						<p>Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. </p>
					</div> <!-- end feature 3 -->
				</div>
			</div> <!-- end features -->
		</div>
	</section> <!-- end features area -->

	<!-- main content area -->
	<main>
		<section id="events">
			<div class="container">
				<div class="row">
					<!-- upcoming events --> 
					<div class="col-md-6 upcoming-events">
						<h2>Upcoming <span>events</span></h2>
						<div class="event">
							<div class="event-image">
								<div class="event-date">
									<span class="day-of-month">08</span>
									<span class="day-of-week">wed</span>
								</div>
								<a href="#"><img src="../images/photos/photo1.jpg" alt="Bridgestone Arena" /></a>
							</div>
							<h3><a href="#">Bridgestone Arena</a></h3>
							<div class="event-location">
								<span class="location"><i class="fa fa-map-marker"></i> Kristal Glam Club</span>
								<span class="time"><i class="fa fa-clock-o"></i> 10:28 pm - 06:00 am</span>
							</div>
							<p>
								Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
							</p>
							<a href="#" class="buy-now">Buy Now</a>
						</div>

						<div class="row">
							<div class="col-sm-6 event">
								<div class="event-image">
									<div class="event-date">
										<span class="day-of-month">09</span>
										<span class="day-of-week">thu</span>
									</div>
									<a href="#"><img src="../images/photos/photo2.jpg" alt="Night Inspirescu Party" /></a>
								</div>
								<h3><a href="#">Night Inspirescu Party</a></h3>
								<div class="event-location">
									<span class="location"><i class="fa fa-map-marker"></i> La Mania Club</span>
									<span class="time"><i class="fa fa-clock-o"></i> All Day</span>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. quam scelerisque tortor dictum gravida. 
								</p>
								<span class="sold-out">Sold Out</span>
							</div>

							<div class="col-sm-6 event">
								<div class="event-image">
									<div class="event-date">
										<span class="day-of-month">12</span>
										<span class="day-of-week">tue</span>
									</div>
									<a href="#"><img src="../images/photos/photo3.jpg" alt="Dj Robag Ruhme" /></a>
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
						</div>
					</div>

					<!-- from the blog -->
					<div class="col-md-6 recent-blog">
						<h2>From <span>the blog</span></h2>
						
						<div class="row recent-post">
							<div class="col-sm-6 post-image">
								<a href="#"><img src="../images/photos/photo4.jpg" alt="Nulla rutrum felis eu interdum" /></a>
							</div>
							<div class="col-sm-6 post-content">
								<h3><a href="#">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
									<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>
						<div class="row recent-post">
							<div class="col-sm-6 post-image">
								<a href="#"><img src="../images/photos/photo5.jpg" alt="Nulla rutrum felis eu interdum" /></a>
							</div>
							<div class="col-sm-6 post-content">
								<h3><a href="#">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
									<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>
						<div class="row recent-post">
							<div class="col-sm-6 post-image">
								<a href="#"><img src="../images/photos/photo6.jpg" alt="Nulla rutrum felis eu interdum" /></a>
							</div>
							<div class="col-sm-6 post-content">
								<h3><a href="#">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
									<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>
						<div class="row recent-post">
							<div class="col-sm-6 post-image">
								<a href="#"><img src="../images/photos/photo7.jpg" alt="Nulla rutrum felis eu interdum" /></a>
							</div>
							<div class="col-sm-6 post-content">
								<h3><a href="#">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
									<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- latest content section -->
		<section id="latest-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 latest-videos">
						<h2>Latest <span>Videos</span> <a href="#" class="view-all"><span>View All</span> <i class="fa fa-angle-double-right view-all-icon"></i></a></h2>
						<div class="row">
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo11.jpg" alt="" />
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
							</div>
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo12.jpg" alt="" />
										</div>
										<div class="latest-content-info">
											<div class="meta">
												<div class="icon">
													<i class="fa fa-video-camera"></i>
												</div>
												<h4>Quantum Force</h4>
												<p>27-September-2013</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 latest-albums">
						<h2>Latest <span>Albums</span> <a href="#" class="view-all"><span>View All</span> <i class="fa fa-angle-double-right view-all-icon"></i></a></h2>
						<div class="row">
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo13.jpg" alt="" />
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
							</div>
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo14.jpg" alt="" />
										</div>
										<div class="latest-content-info">
											<div class="meta">
												<div class="icon">
													<i class="fa fa-headphones"></i>
												</div>
												<h4>Desire Evita</h4>
												<p>Hip-Hop, Pop/Rock</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 latest-gallery">
						<h2>Latest <span>Gallery</span> <a href="#" class="view-all"><span>View All</span> <i class="fa fa-angle-double-right view-all-icon"></i></a></h2>
						<div class="row">
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo15.jpg" alt="" />
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
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo16.jpg" alt="" />
										</div>
										<div class="latest-content-info">
											<div class="meta">
												<div class="icon">
													<i class="fa fa-camera"></i>
												</div>
												<h4>Beijing Live Show</h4>
												<p>@Beijing, China</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 latest-artist">
						<h2>Latest <span>Artist</span> <a href="#" class="view-all"><span>View All</span> <i class="fa fa-angle-double-right view-all-icon"></i></a></h2>
						<div class="row">
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo17.jpg" alt="" />
										</div>
										<div class="latest-content-info">

											<div class="meta">
												<div class="icon">
													<i class="fa fa-user"></i>
												</div>
												<h4>Dj Charlie White</h4>
												<p>Deep House</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="latest-content">
									<a href="#">
										<div class="latest-content-image">
											<img src="../images/photos/photo18.jpg" alt="" />
										</div>
										<div class="latest-content-info">
											<div class="meta">
												<div class="icon">
													<i class="fa fa-user"></i>
												</div>
												<h4>Aaron LaCrate</h4>
												<p>Trance</p>
											</div>
										</div>
									</a>
								</div>
							</div>
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