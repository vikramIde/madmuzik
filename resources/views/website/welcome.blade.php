<!-- Banner Slider -->
@extends('website.app')
@section('content')

	<section id="banner">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="container">
						<h1>MadMuzik the largest music theme</h1>
						<p>MadMuzik is a powerful and responsive Music, Band &amp; DJ HTML Template with pretty much advanced features like display Artists, Albums, Photo Galleries, Video Galleries and Events. </p>
						<a href="#" class="action-button">Buy Template</a>
					</div>
				</li> <!-- end slide 1 -->
				<li>
					<div class="container">
						<h1>Tons of pages included</h1>
						<p>MadMuzik is a powerful and responsive Music, Band &amp; DJ HTML Template with pretty much advanced features like display Artists, Albums, Photo Galleries, Video Galleries and Events. </p>
						<a href="#" class="action-button">View Pages</a>
					</div>
				</li> <!-- end slide 2 -->
				<li>
					<div class="container">
						<h1>Fully responsive grid layout</h1>
						<p>MadMuzik is a powerful and responsive Music, Band &amp; DJ HTML Template with pretty much advanced features like display Artists, Albums, Photo Galleries, Video Galleries and Events. </p>
						<a href="#" class="action-button">Preview</a>
					</div>
				</li> <!-- end slide 3 -->
			</ul>
		</div>
	</section>

	<main>
		<?php //dd($featuredArtist) ?>
		<section id="latest-content">
			<div class="container">
				<div class="row">
					@foreach($featuredArtist as $featuredartist)
					<div class="col-md-4 latest-videos">
						<h2>Featured <span>Artist</span> </h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="latest-content">
									<a href="{{ URL::to('/site/featuredArtist/'.$featuredartist->id ) }}">
									<div class="latest-content-image">
										@if($featuredartist->artist_image !='')
										<img src="{{$featuredartist->artist_image}}" alt="" />
										@else
									  	<img src="{{asset('/images/music1.png')}}" alt="" />
										@endif
									</div>
									<div class="latest-content-info">

										<div class="meta">
											<div class="headicon">
											<div class="icon">
												<i class="fa fa-headphones"></i>
											</div>
											<h4><a href="{{ URL::to('/site/featuredArtist/'.$featuredartist->id ) }}" >{{$featuredartist->artist_name}}</a></h4>
											</div>
											<p>{{$featuredartist->artist_description}}</p>
										<a href="#" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@foreach($featuredAlbum as $featuredalbum)
					 <div class="col-md-4 latest-albums">
						<h2>Featured <span>Album</span> </h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="latest-content">
									<a href="{{ URL::to('/site/featuredAlbum/'.$featuredalbum->id ) }}">
									<div class="latest-content-image">
										@if($featuredalbum->album_art !='')
										<img src="{{$featuredalbum->album_art}}" alt="" />
										@else
									  	<img src="{{asset('/images/music1.png')}}" alt="" />
										@endif
									</div>
									<div class="latest-content-info">

										<div class="meta">
										<div class="headicon">	
											<div class="icon">
												<i class="fa fa-music" aria-hidden="true"></i>
											</div>
											<h4><a href="{{ URL::to('/site/featuredAlbum/'.$featuredalbum->id ) }}" >{{$featuredalbum->album_name}}</a></h4>
										</div>
											<p>{{$featuredalbum->album_description}}	</p>
											<a href="#" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>@endforeach
					<div class="col-md-4 latest-gallery">
						<h2><span>Shop</span> </h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="latest-content">
									<a href="{{ url('/site/shop') }}">
									<div class="latest-content-image">
										<img src="{{asset('/images/shop1.png')}}" alt="" />
									</div>
									<div class="latest-content-info">

										<div class="meta">
											<div class="headicon"><div class="icon">
												<i class="fa fa-newspaper-o" aria-hidden="true"></i>
											</div>
											<h4><a href="{{ url('/site/shop') }}">Shop</a></h4>
											</div>
											<p>We wanted to do this way earlier, but we finally did get around to doing it, we kicked out some other stuff out of the way .…</p>
											<a href="{{ url('/site/shop') }}" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="col-md-3 latest-artist">
						<h2><span>Shop</span> </h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="latest-content">
									<div class="latest-content-image">
										<img src="{{asset('/images/photos/photo17.jpg')}}" alt="" />
									</div>
									<div class="latest-content-info">
										<div class="meta">
											<div class="headicon">
												<div class="icon">
													<i class="fa fa-shopping-bag"></i>
												</div>
												<h4>Elau Akkual - Now Shipping World Wide.</h4>
											</div><p>Access MadShop to get your copy of Elau Akkual now.</p>
											<a href="#" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
	</main>
	@endsection