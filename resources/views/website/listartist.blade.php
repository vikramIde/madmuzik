@extends('website.app')
@section('content')

<!--    <script>
    $('.pagination').bootpag({
    total: 5
	}).on("page", function(event, num){
		$(".artist").html("Page " + num);
		$(this).bootpag({total: 10, maxVisible: 10});
	 });
    </script> -->

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Artists</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Artists</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 artists-desc">
						<p>Nullam eu lectus et tellus malesuada bibendum sed a nisl. Praesent iaculis sem nisi, sed molestie est ullamcorper vitae. Praesent ac tincidunt eros. Duis eget urna convallis, faucibus magna vel, auctor justo. Proin et scelerisque dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">See below artist list.</a></p>
					</div>
				</div>

				<!--<ul class="isotope-filters artist-filter">
					<li class="current"><a href="#" data-filter="*">All Artists</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".drummer">Drummers</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".guitar">Guiter Players</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".singer">Singers</a></li>
					<li><i class="fa fa-ellipsis-v"></i><a href="#" data-filter=".solo">Solo Artists</a></li>
				</ul>-->

				<div class="row artists">
					<!-- artists -->
					
					@foreach($artistList as $artist)
					<div class="col-sm-6 col-md-3 artist guitar">
						<div class="latest-content">
							<a href="artist.html">
								<div class="latest-content-image">
								@if($artist->artist_image !='')
									<img src="{{$artist->artist_image}}" alt="" />
								@else
								  <img src="{{asset('/images/music1.png')}}" alt="" />
								@endif
								<!--<div class="latest-content-image">
									<img src="{{$artist->artist_image_loc}}" onerror="imgError(this);" alt="" />
								</div>-->
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div>
										<h4>{{$artist->artist_name}}</h4>
										<p>{{$artist->artist_title}}</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>

			<ul class="pagination">
				<li class="current"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
			</ul>
		</section>
	</main> <!-- end main content area  -->
	@endsection