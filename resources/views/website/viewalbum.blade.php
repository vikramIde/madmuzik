@extends('website.app')
@section('content')

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> <a href="albums.html">Albums</a> <i class="fa fa-angle-double-right"></i> Album Details</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Album</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
				<div class="container">
				<div class="album-banner">
					<div class="row event-info">
					@foreach($albumDetails as $album)
					<div class="banner-image col-md-7">
						<img src="{{ asset( $album->album_mainart) }}" style="" alt="" class="img-responsive" style="padding:20px;"/>
					</div>
					<div class="col-sm-5" style="padding:20px;">
						<h3 class="event-details">Details</h3>
						<dl class="dl-horizontal">
							<dt>Album Name</dt><dd>{{$album->album_name}}</dd>
							<dt>Release Date :</dt><dd>{{$album->album_release_date}}</dd>
							<dt>Compiled By :</dt><dd>{{$album->album_compiled_by}}</dd>
							<dt>Mastering :</dt><dd>{{$album->album_mastering}}</dd>
							<dt>Artwork :</dt><dd>{{$album->album_artwork}}</dd>
							<br/><div class="artist-info" style="margin-top:20px;"><ul class="share clearfix">
							<li><a href="{{$album->album_facebook}}"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="{{$album->album_facebook}}"><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a href="{{$album->album_facebook}}"><i class="fa fa-lg fa-flickr"></i></a></li>
							<li><a href="{{$album->album_facebook}}"><i class="fa fa-lg fa-google-plus"></i></a></li>
						</ul></div>
						</dl>

						<div class="action-buttons">
							<a href="#">Buy Now</a>
							<a href="#">Vote</a>
						</div>
					</div>
					</div>
					@endforeach
				</div>

				<div class="row album-info">
					<div class="col-xs-12 col-md-9 col-md-offset-1">
						<h3>Album Description</h3>
						<?php $x =$album->album_description ?>
						<?php echo str_replace( '', '\r\n', $x ); 
						?>
					 <div id="songs">
							
						<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/<?php echo $album->album_soundcloud; ?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

						</div> 
					</div>
				</div>

				<!-- featured albums -->
				
				<div class="row">
					<div class="col-md-6"><h2>Other <span>Albums</span></h2>@foreach($randomAlbumlist as $randalbum)
					<div class="col-sm-6">
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewartist/'.$randalbum->id ) }}">
								<div class="latest-content-image">
								@if($randalbum->album_art !='')
									<img src="{{ asset($randalbum->album_art )}}" alt="" />
								@else
								  <img src="{{asset('/images/music1.png')}}" alt="" />
								@endif
								</div>
								<div class="latest-content-info">

									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div><!-- you can change this to anywhere -->
										<h4><a href="{{ URL::to('/site/viewalbum/'.$randalbum->id ) }}" >{{$randalbum->album_name}}</a></h4>
										<br/>
									</div>
								</div>
							</a>
						</div>
					</div>	
					@endforeach
				</div>
					<div class="col-md-6"><h2>Other <span>Artists</span></h2>
					<div class="row">	
					@foreach($randomArtistlist as $randartist)
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
										<h4><a href="{{ URL::to('/site/viewartist/'.$randartist->id ) }}" >{{$randartist->artist_name}}</a></h4>
										<p>{{$randartist->artist_title}}</p>
									</div>
								</div>
							</a>
						</div>
					</div>	
					@endforeach				
				</div></div>
			</div>	
			</div>
			</div>
		</section>
	</main> <!-- end main content area -->

@endsection