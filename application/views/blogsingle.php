<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog Single</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> <a href="blog.html">Blog</a> <i class="fa fa-angle-double-right"></i> Single Blog Post</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Blog Post</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<!-- blog area -->
					<div class="col-sm-8 clearfix">
						<div class="post">
							<h3>Donec convallis erosdiamquis laoreetle</h3>
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
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ specimen book. It has survived not only five centuries, but also the leap into electronic typesetting changed. </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat dolor nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam consectetur mauris leo, ut faucibus nibh sodales ut. Pellentesque gravida sodales commodo. Nullam fringilla in risus ac bibendum. Aenean hendrerit pharetra nisl. Sed sit amet sapien et elit porttitor venenatis quis eu est. Quisque a pellentesque dui, vitae tempus augue. Curabitur quis mattis mi. Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium.</p>
								<blockquote>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </blockquote>
								<h4>Small Sub Heading Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet dolor tellus, ut dictum orci. Nulla facilisi. Phasellus porttitor scelerisque justo, eu pulvinar mauris adipiscing vitae. Duis sed dui quis nunc tempus imperdiet vitae vitae ipsum. </p>
								<ul>
									<li>Nulla congue felis sit amet velit pellentesque non euismod ante iaculis.</li>
									<li>Donec bibendum consectetur magna, id interdum ante convallis non.</li>
									<li>Maecenas sodales sem sit amet tellus facilisis accumsan.</li>
									<li>Integer eu leo et nunc feugiat rutrum sed in elit.</li>
								</ul>
								<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
								<h4>Small Sub Heading Title</h4>
								<p><img src="images/photos/photo31.jpg" alt="" class="alignleft" />Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium. Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium.</p>
								<p>Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium. Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium.</p>
								<p><img src="images/photos/photo32.jpg" alt="" class="alignright" />Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium. Proin varius sed enim sit amet lobortis. In hac habitasse platea dictumst. Cras sit amet est eget dui viverra scelerisque. Duis semper pulvinar dui, nec mollis libero tincidunt quis. Vestibulum hendrerit euismod lorem eu pretium.</p>
							</div>
						</div>
						<div class="author-info">
							<div class="avatar">
								<img src="images/photos/photo41.jpg" alt="" />
							</div>
							<div class="bio">
								<h5>Robert Louise <span>Author</span></h5>
								<p>Nullam fringilla in risus ac bibendum. Aenean hendrerit pharetra nisl. Sed sit amet sapien et elit porttitor venenatis quis eu est. Quisque a pellentesque dui, vitae tempus augue.</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-flickr"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>

						<div id="comments">
							<h3><i class="fa fa-lg fa-comments"></i> 3 Comments</h3>
							<ul class="comments">
								<li>
									<div class="avatar">
										<img src="images/photos/photo42.jpg" alt="" />
									</div>
									<div class="content">
										<h5>Paulo <span>Tuesday, 5 May 2013 // 19:42</span></h5>
										<p>Nullam fringilla in risus ac bibendum. Aenean hendrerit pharetra nisl. Sed sit amet sapien et elit porttitor venenatis quis eu est. Quisque a pellentesque dui, vitae tempus augue.</p>
										<a href="#" class="reply">Reply <i class="fa fa-share"></i></a>
									</div>
									<ul>
										<li>
											<div class="avatar">
												<img src="images/photos/photo43.jpg" alt="" />
											</div>
											<div class="content">
												<h5>Roberto <span>Tuesday, 5 May 2013 // 19:42</span></h5>
												<p>Nullam fringilla in risus ac bibendum. Aenean hendrerit pharetra nisl. Sed sit amet sapien et elit porttitor venenatis quis eu est. Quisque.</p>
												<a href="#" class="reply">Reply <i class="fa fa-share"></i></a>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="avatar">
										<img src="images/photos/photo41.jpg" alt="" />
									</div>
									<div class="content">
										<h5>Louise <span>Tuesday, 5 May 2013 // 19:42</span></h5>
										<p>Nullam fringilla in risus ac bibendum. Aenean hendrerit pharetra nisl. Sed sit amet sapien et elit porttitor venenatis quis eu est. Quisque a pellentesque dui, vitae tempus augue.</p>
										<a href="#" class="reply">Reply <i class="fa fa-share"></i></a>
									</div>
								</li>
								<li>
									<div class="avatar">
										<img src="images/photos/photo42.jpg" alt="" />
									</div>
									<div class="content">
										<h5>Paulo <span>Tuesday, 5 May 2013 // 19:42</span></h5>
										<p>Nullam fringilla in risus ac bibendum. Aenean hendrerit pharetra nisl. Sed sit amet sapien et elit porttitor venenatis quis eu est. Quisque a pellentesque dui, vitae tempus augue.</p>
										<a href="#" class="reply">Reply <i class="fa fa-share"></i></a>
									</div>
								</li>
							</ul>
						</div>

						<div id="leave-comment">
							<h2>Leave A <span>Comment</span></h2>
							<form action="#" method="post" name="leave-comment">
								<label for="name">Your Name</label>
								<input type="text" name="name" id="name" value="" required />
								<label for="email">Your E-Mail</label>
								<input type="email" name="email" id="email" value="" required />
								<label for="message">Message</label>
								<textarea name="message" id="message"></textarea>
								<input type="submit" name="submitcomment" id="submitcomment" value="Submit Comment" />
							</form>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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
											<h3><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since</a></h3>
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