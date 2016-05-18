@extends('website.app')
@section('content')
	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> <a href="artists.html">Artists</a> <i class="fa fa-angle-double-right"></i> Artist Details</div>
	</section>
	<section id="tagline">
		<div class="container">
			<h1>Artist</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>
	<main>
		<section id="content">
			<div class="container">
				<!--<div class="row artist-info">
					<div class="col-md-8">
					@foreach($artistDetail as $artist)
					<div class="row"><div class="col-md-5"><img src="{{$artist->artist_image}}" alt="" class="img-responsive"/></div>
					<div class="col-md-7 space">
						<h4 class="orange">NAME: <span class="white">{{$artist->artist_name}}</span></h4>
						<h4 class="orange">TITLE: <span class="white">{{$artist->artist_title}}</span></h4>
						<h4 class="orange">DESCRIPTION: <span class="white">{{$artist->artist_description}}</span></h4>
					</div>
					</div><br/>
					<div class="col-md-12">
						<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F40802773&amp;auto_play=false&amp;show_artwork=true&amp;color=bfbfbf"></iframe>
					</div>
					<div class="col-md-12">
					</div>
					@endforeach
				</div>-->
				<div class="row artist-info">
				@foreach($artistDetail as $artist)
					<div class="col-sm-4 col-md-3">
						

						<div class="latest-content">
							<div class="latest-content-image">
								<img src="{{asset($artist->artist_image)}}" alt="" class="img-responsive"/>
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
						</div>
						<ul class="share clearfix">
							<li><a href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-flickr"></i></a></li>
							<li><a href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-google-plus"></i></a></li>
						</ul>
						
					</div>
					<div class="col-sm-8 col-md-9">
						<h3>Biography of Artist</h3>
						<?php $x =$artist->artist_description ?>
						<?php echo str_replace( "", "\r\n", $x ); ?>
					</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-md-6"><h2>Other <span>Artists</span></h2>@foreach($randomArtistlist as $randartist)
					<div class="col-sm-6">						
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewartist/'.$randartist->id ) }}">
								<div class="latest-content-image">
								@if($randartist->artist_image !='')
									<img src="{{asset($randartist->artist_image)}}" alt="" />
								@else
								  <img src="{{asset('/images/music1.png')}}" alt="" />
								@endif
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div><!-- you can change this to anywhere -->
										<h4><a href="{{ URL::to('/site/viewartist/'.$randartist->id ) }}" >      {{$randartist->artist_name}}</a></h4>
										<p>{{$randartist->artist_title}}</p>
									</div>
								</div>
							</a>
						</div>
					</div>	
					@endforeach	
					</div>	
					<div class="col-md-6"><h2>Other <span>Albums</span></h2>
					@foreach($randomAlbumlist as $randalbum)
					<div class="col-sm-6">
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewartist/'.$randalbum->id ) }}">
								<div class="latest-content-image">
								@if($randalbum->album_art !='')
									<img src="{{$randalbum->album_art}}" alt="" />
								@else
								  <img src="{{asset('/images/music1.png')}}" alt="" />
								@endif
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div><!-- you can change this to anywhere -->
										<h4><a href="{{ URL::to('/site/viewartist/'.$randalbum->id ) }}" >{{$randalbum->album_name}}</a></h4>
										<br/>
									</div>
								</div>
							</a>
						</div>
					</div>	
					@endforeach				
				</div></div>
			</div>	
		</section>
	</main> 
@endsection