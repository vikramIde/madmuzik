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
				<div class="row artist-info">
				@foreach($artistDetail as $artist) 
					<div class="col-sm-4 col-md-3">
						

						<div class="latest-content">
							<div class="latest-content-image">
								@if($artist->artist_image !='')
									<img src="{{asset($artist->artist_image)}}" alt="" />
								@else
								  <img src="{{asset('/images/music1.png')}}" alt="" />
								@endif
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
							<li><a target="_blank" href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a target="_blank" href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a target="_blank" href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-flickr"></i></a></li>
							<li><a target="_blank" href="{{$artist->artist_fb}}"><i class="fa fa-lg fa-google-plus"></i></a></li>
						</ul>
						
					</div>
					<div class="col-sm-8 col-md-9">
						<h3>Biography of Artist</h3>
						<?php $x =$artist->artist_description ?>
						<?php echo str_replace( '', '\r\n', $x ); 
						?>
						 <div id="songs">
							
						<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/<?php echo $artist->artist_soundcloud; ?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

						</div> 
					</div>
					@endforeach
				</div>

				<div class="row">
					<?php if(count($randomArtistlist) > 1 ) { ?>
					<div class="col-md-6"><h2>Other <span>Artists</span></h2>	
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
										<h4><a href="{{ URL::to('/site/viewartist/'.$randartist->id ) }}" > {{$randartist->artist_name}}</a></h4>
										<p>{{$randartist->artist_title}}</p>
									</div>
								</div>
							</a>
						</div>
					</div>	
					@endforeach	
					</div>	
					<?php } ?>

					<?php if(count($randomAlbumlist) > 1 ) { ?>
					<div class="col-md-6"><h2>Other <span>Albums</span></h2>
					@foreach($randomAlbumlist as $randalbum)
					<div class="col-sm-6">
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewartist/'.$randalbum->id ) }}">
								<div class="latest-content-image">
								@if($randalbum->album_art !='')
									<img src="{{asset($randalbum->album_art)}}" alt="" />
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
				</div>
			<?php } ?>
		</div>


	</div>	
</section>
</main> 
@endsection