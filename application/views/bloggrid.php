<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog Grid</title>
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
			<h1>Blog Grid Style</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row grid-blog">
					<!-- blog area -->
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-image">
								<a href="#"><img src="images/photos/photo2.jpg" alt="" /></a>
							</div>
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-image">
								<a href="#"><img src="images/photos/photo7.jpg" alt="" /></a>
							</div>
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-image">
								<a href="#"><img src="images/photos/photo6.jpg" alt="" /></a>
							</div>
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh felis eu interdum. Donec semper quam scelerisque tortor dictum gravida felis eu interdum. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post quote-post">
							<blockquote>
								<p>Pellentesque gravida dales commodo. Nullam fringilla in risus ac endum. Aenean hendrerit pharetra nisl. Sed sit amet sapien </p>
								<cite>John Doe</cite>
							</blockquote>
							<div class="post-content">
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-image">
								<a href="#"><img src="images/photos/photo4.jpg" alt="" /></a>
							</div>
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-image">
								<a href="#"><img src="images/photos/photo6.jpg" alt="" /></a>
							</div>
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post quote-post">
							<blockquote>
								<p>Pellentesque gravida dales commodo. Nullam fringilla in risus ac endum. Aenean hendrerit pharetra nisl. Sed sit amet sapien </p>
								<cite>John Doe</cite>
							</blockquote>
							<div class="post-content">
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-image">
								<a href="#"><img src="images/photos/photo4.jpg" alt="" /></a>
							</div>
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="recent-post grid-post">
							<div class="post-content">
								<h3><a href="blog-single.html">Nulla rutrum felis eu interdum</a></h3>
								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i> October 4, 2013</span>
									<a href="#" class="comments"><i class="fa fa-comments"></i> 3 Comments</a>
								</div>
								<p>
									Euismod magna sapien ut nibh. Donec semper quam scelerisque tortor dictum gravida. Euismod magna sapien ut nibh. 
								</p>
								<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right read-more-icon"></i></a>
								<span class="tags"><i class="fa fa-tag"></i> <a href="#">Music</a></span>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="load-more">Load More</a>				
			</div>
		</section>
	</main> <!-- end main content area -->

	 <?php
 $this->load->view('footer');
?>
</body>
</html>