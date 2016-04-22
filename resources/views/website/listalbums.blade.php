@extends('website.app')
@section('content')
	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Albums</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Albums / Discography</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 albums-desc">
						<p>Nullam eu lectus et tellus malesuada bibendum sed a nisl. Praesent iaculis sem nisi, sed molestie est ullamcorper vitae. Praesent ac tincidunt eros. Duis eget urna convallis, faucibus magna vel, auctor justo. Proin et scelerisque dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">See below album list.</a></p>
					</div>
				</div>

				<!--<ul class="isotope-filters album-filter">
					<li class="current"><a href="#" data-filter="*">All Albums</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".electronic">Electronic</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".pop">Pop</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".rock">Rock</a></li>
				</ul>-->

				<div class="row albums">
					<!-- albums -->
					<div class="col-sm-6 col-md-3 album pop">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo26.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Large Worldwide</h4>
										<p>Pethouse Records, Real Recordings</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album electronic">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo25.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Desire Evita</h4>
										<p>PhetHouse Records</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album rock">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo24.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Fly Away Monster</h4>
										<p>Spinder Records</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album electronic">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo26.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Large Worldwide</h4>
										<p>Pethouse Records, Real Recordings</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album electronic">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo25.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Desire Evita</h4>
										<p>PhetHouse Records</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album pop">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo24.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Fly Away Monster</h4>
										<p>Spinder Records</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album electronic">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo17.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Large Worldwide</h4>
										<p>Real Recordings, Pethouse</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 album rock">
						<div class="latest-content">
							<a href="album.html">
								<div class="latest-content-image">
									<img src="images/photos/photo25.jpg" alt="" />
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4>Desire Evita</h4>
										<p>PhetHouse Records</p>
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

@endsection