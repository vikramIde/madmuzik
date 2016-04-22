<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Video</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Video</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Video</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 videos-desc">
						<p>Nullam eu lectus et tellus malesuada bibendum sed a nisl. Praesent iaculis sem nisi, sed molestie est ullamcorper vitae. Praesent ac tincidunt eros. Duis eget urna convallis, faucibus magna vel, auctor justo. Proin et scelerisque dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">See below gallery list.</a></p>
					</div>
				</div>

				<ul class="isotope-filters videos-filter">
					<li class="current"><a href="#" data-filter="*">All Videos</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".liveshow">Live Show</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".tv">TV</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".archieve">archieve</a></li>
				</ul>

				<div class="row videos">
					<!-- videos -->
					<div class="col-sm-6 col-md-3 video archieve">
						<div class="latest-content">
							<a href="http://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo61.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Awesome Live Festival</h4>
										<p>@Barcelona, Spain</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video tv">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo62.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Awesome Live Festival</h4>
										<p>@Barcelona, Spain</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video archieve">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo63.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Nightfest Ending </h4>
										<p>@London, UK</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video liveshow">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo64.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Awesome Live Festival</h4>
										<p>@Barcelona, Spain</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video tv">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo63.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Nightfest Ending </h4>
										<p>@London, UK</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video liveshow">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo61.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Nightfest Ending </h4>
										<p>@London, UK</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video archieve">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo64.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Awesome Live Festival</h4>
										<p>@Barcelona, Spain</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 video tv">
						<div class="latest-content">
							<a href="https://www.youtube.com/watch?v=jXOgYxUf6Ts" class="video-link">
								<div class="latest-content-image">
									<img src="images/photos/photo62.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-video-camera"></i>
										</div>
										<h4>Nightfest Ending </h4>
										<p>@London, UK</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<ul class="pagination">
				<li class="current"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
			</ul>
		</section>
	</main> <!-- end main content area -->

	 <?php
 $this->load->view('footer');
?>
</body>
</html>