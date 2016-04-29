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
					@foreach($albumDetails as $album)
					<div class="banner-image1">
						<img src="{{$album->album_mainart}}" style="" alt="" class="img-responsive"/>
					</div>
					<div class="row">
						<div class="col-sm-9 album-title">
							<div class="col-md-6"><h4>{{$album->album_name}}</h4>
							<h4 class="orange">Release date: <span class="white">{{$album->album_release_date}}</span></h4>
							<h4 class="orange">Compiled By: <span class="white">{{$album->album_compiled_by}}</span></h4>
							</div>
							<div class="col-md-6">
							<h4 class="orange">Mastering: <span class="white">{{$album->album_mastering}}</span></h4>
							<h4 class="orange">Artwork: <span class="white">{{$album->album_artwork}}</span></h4>
							<div class="artist-info" style="margin-top:20px;"><ul class="share clearfix">
							<li><a href="Laborum voluptas ea ut molestiae ut."><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="Laborum voluptas ea ut molestiae ut."><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a href="Laborum voluptas ea ut molestiae ut."><i class="fa fa-lg fa-flickr"></i></a></li>
							<li><a href="Laborum voluptas ea ut molestiae ut."><i class="fa fa-lg fa-google-plus"></i></a></li>
						</ul></div></div>
						</div>
						<div class="col-sm-3 album-btns">
							<h5>This album is now available</h5>
							<ul class="btns">
								<li><a href="#">Vote</a></li>
								<li><a href="#">Buy</a></li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>

				<div class="row album-info">
					<div class="col-xs-12 col-md-9 col-md-offset-1">
						<h3>Album Description</h3>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
						
						 <div id="songs">
							<h4>Album Tracks <span>6 Tracks In Total</span></h4>
							<iframe width="100%" height="450" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F1696284&amp;auto_play=false&amp;show_artwork=true&amp;color=bfbfbf"></iframe>
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
				</div>
					<div class="col-md-6"><h2>Other <span>Artists</span></h2>
					<div class="row">	
					@foreach($randomArtistlist as $randartist)
					<div class="col-sm-6">
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewartist/'.$randartist->id ) }}">
								<div class="latest-content-image">
								@if($randartist->artist_image !='')
									<img src="{{$randartist->artist_image}}" alt="" />
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