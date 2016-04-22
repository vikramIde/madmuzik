<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Blog</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Blog</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<!-- blog area -->
					<div class="col-sm-8">
						<div class="post">
							<h3><a href="blog-single.html">Donec convallis erosdiamquis laoreetleo</a></h3>
							<div class="post-meta">
								<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
								<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a>, <a href="#">Videos</a></span>
								<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
							</div>
							<div class="post-image">
								<a href="#"><img src="images/photos/photo6.jpg" alt="Nulla rutrum felis eu interdum" /></a>
							</div>
							<div class="post-content">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ specimen book. It has survived not only five centuries, but also the leap into electronic typesetting changed.... </p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>
						<div class="post">
							<h3><a href="blog-single.html">Donec convallis erosdiamquis laoreetleo</a></h3>
							<div class="post-meta">
								<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
								<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a>, <a href="#">Videos</a></span>
								<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
							</div>
							<div class="post-image">
								<div class="flexslider post-gallery">
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
							<div class="post-content">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ specimen book. It has survived not only five centuries, but also the leap into electronic typesetting changed.... </p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>
						<div class="post">
							<h3><a href="blog-single.html">Donec convallis erosdiamquis laoreetleo</a></h3>
							<div class="post-meta">
								<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
								<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a>, <a href="#">Videos</a></span>
								<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
							</div>
							<div class="post-image">
								<iframe src="https://www.youtube.com/embed/jXOgYxUf6Ts" allowfullscreen></iframe>
							</div>
							<div class="post-content">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ specimen book. It has survived not only five centuries, but also the leap into electronic typesetting changed.... </p>
								<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div>

						<div class="row blog-pagination">
							<div class="col-sm-2">
								<a href="#" class="prev">Previous</a>
							</div>
							<div class="col-sm-8">
								<ul class="pagination">
									<li class="current"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
								</ul>
							</div>
							<div class="col-sm-2">
								<a href="#" class="next">Next</a>
							</div>
						</div>
					</div>

					<!-- sidebar -->
					<aside class="sidebar col-sm-4">
						<div class="widget">
							<h2>Search</h2>
							<form action="#" name="search-form" class="search-form">
								<input type="search" value="" name="search-term" class="search-term" placeholder="Search entire blog here..." />
								<input type="submit" value="" name="search-submit" class="search-submit" />
							</form>
						</div>

						<div class="widget">
							<h2>Categories</h2>
							<ul class="nav">
								<li><a href="#"><i class="fa fa-lg fa-angle-double-right"></i> Reviews</a></li>
								<li><a href="#"><i class="fa fa-lg fa-angle-double-right"></i> Shows</a></li>
								<li><a href="#"><i class="fa fa-lg fa-angle-double-right"></i> Events</a></li>
								<li><a href="#"><i class="fa fa-lg fa-angle-double-right"></i> Featured</a></li>
							</ul>
						</div>

						<div class="widget">
							<!-- Nav tabs -->
							<ul class="tabs">
								<li class="active"><a href="#recent" data-toggle="tab">Recent</a></li>
								<li><a href="#mostcomments" data-toggle="tab">Comments</a></li>
								<li><a href="#popular" data-toggle="tab">Popular</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="recent">
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo14.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo16.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo12.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="mostcomments">
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo16.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo15.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo18.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="popular">
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo15.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo13.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
									<div class="row recent-post">
										<div class="col-md-4 post-image">
											<a href="#"><img src="images/photos/photo11.jpg" alt="Nulla rutrum felis eu interdum" /></a>
										</div>
										<div class="col-md-8 post-content">
											<h3><a href="blog-single.html">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
											<div class="post-meta">
												<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
												<span class="author"><i class="fa fa-user"></i> Author: <a href="#">John Doe</a></span>
											</div>
											<a href="#" class="read-more">Read More</a><i class="fa fa-angle-double-right read-more-icon"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="widget">
							<h2>Twitter Feed</h2>
							<ul class="tweets">
								<li>
									In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit <a href="#">http://t.co/yY7s1IfrAb</a>
									<div class="date"><span>April 13 2013</span>, 10:38:41</div>
								</li>
								<li>
									<span>RT</span> <a href="#">@JhonDoe:</a> Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est <a href="#">http://t.co/HMOeUv5BaD</a>
									<div class="date"><span>April 13 2013</span>, 10:38:41</div>
								</li>
								<li>
									<span>RT</span> <a href="#">@tommcfarlin:</a> onec semper quam scelerisque tortor dictum gravida. <a href="#">http://t.co/HMOeUv5BaD</a>
									<div class="date"><span>April 13 2013</span>, 10:38:41</div>
								</li>
							</ul>
						</div>

						<div class="widget">
							<h2>Tags</h2>
							<ul class="tags">
								<li><a href="#">Events</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Videos</a></li>
								<li><a href="#">Albums</a></li>
								<li><a href="#">Solo Artists</a></li>
								<li><a href="#">Audio Post</a></li>
								<li><a href="#">Musical</a></li>
								<li><a href="#">Live</a></li>
								<li><a href="#">Concert</a></li>
								<li><a href="#">Movie</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->

	 <?php
 $this->load->view('footer');
?>
</body>
</html>