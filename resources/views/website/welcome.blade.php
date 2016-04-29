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
					<div class="col-md-3 latest-videos">
						<h2>Last <span>Artist</span> </h2>
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
											<p>In the language of the wise and ancient Maya, ‘Elau’ means ‘Color’ and ‘Akkual’ means Night; as a dedication to the new age of consciousness,…</p>
										<a href="#" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@foreach($featuredAlbum as $featuredalbum)
					 <div class="col-md-3 latest-albums">
						<h2>Featured <span>Album</span> </h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="latest-content">
									<a href="{{ URL::to('/site/featuredAlbum/'.$featuredalbum->id ) }}">
									<div class="latest-content-image">
										@if($featuredalbum->artist_image !='')
										<img src="{{$featuredalbum->artist_image}}" alt="" />
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
											<p>ESP is a Forest/Dark Psychedelic project from Kumanovo, Macedonia started by Nikola Krstevski in 2010.  After getting infected by psytrance and DJing…</p>
											<a href="#" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>@endforeach
					<!--<div class="col-md-3 latest-gallery">
						<h2><span>News</span> </h2>
						<div class="row">
							<div class="col-sm-12">
								<div class="latest-content">
									<div class="latest-content-image">
										<img src="{{asset('/images/photos/photo15.jpg')}}" alt="" />
									</div>
									<div class="latest-content-info">

										<div class="meta">
											<div class="headicon"><div class="icon">
												<i class="fa fa-newspaper-o" aria-hidden="true"></i>
											</div>
											<h4>We release our first Compilation and Launched the Madshop....life is good!</h4>
											</div>
											<p>We wanted to do this way earlier, but we finally did get around to doing it, we kicked out some other stuff out of the way got the important stuff together.…</p>
											<a href="#" class="view-all"><span>Read More </span><i class="fa fa-angle-double-right view-all-icon"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 latest-artist">
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