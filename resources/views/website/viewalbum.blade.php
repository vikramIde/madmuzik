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
			<!-- <div class="container">
				<div class="row artist-info">
					<div class="col-sm-4 col-md-3">
						@foreach($albumDetails as $album)
						<div class="latest-content">
							<div class="latest-content-image">
								<img src="{{$album->album_art}}" alt="" class="img-responsive"/>
							</div>
							<div class="latest-content-info">
								<div class="meta">
									<div class="icon">
										<i class="fa fa-user"></i>
									</div>
									<h4>{{$album->album_name}}</h4>
								</div>
							</div>
						</div>
						<ul class="share clearfix">
							<li><a href="{{$album->album_youtube}}"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="{{$album->album_youtube}}"><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a href="{{$album->album_youtube}}"><i class="fa fa-lg fa-flickr"></i></a></li>
							<li><a href="{{$album->album_youtube}}"><i class="fa fa-lg fa-google-plus"></i></a></li>
						</ul>
						@endforeach
					</div>
					<div class="col-sm-8 col-md-9">
						<h3>Biography Heading of Artist</h3>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
						<h4>Smaller heading</h4>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
					</div>
					<div class="row">
						<div class="col-md-12">
							@foreach($albumDetails as $album)
							 <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="{{$album->album_soundcloud}}"></iframe> 
							<iframe width="100%" height="450" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F1696284&amp;auto_play=false&amp;show_artwork=true&amp;color=bfbfbf"></iframe>
							@endforeach
						</div>
					</div>
				</div>
				</div> -->
				<div class="container">
				<div class="album-banner">
					@foreach($albumDetails as $album)
					<div class="banner-image">
						<img src="{{$album->album_art}}" alt="" class="img-responsive"/>
					</div>
					<div class="row">
						<div class="col-sm-9 album-title">
							<div class="col-md-6"><h4>{{$album->album_name}}</h4>
							<h4 class="orange">Release date: <span class="white">{{$album->album_name}}</span></h4>
							<h4 class="orange">Compiled By: <span class="white">{{$album->album_name}}</span></h4>
							</div>
							<div class="col-md-6">
							<h4 class="orange">Mastering: <span class="white">{{$album->album_name}}</span></h4>
							<h4 class="orange">Artwork: <span class="white">{{$album->album_name}}</span></h4>
							<h4 class="orange">Social: <span class="white">{{$album->album_name}}</span></h4></div>
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
				<h2>Featured <span>Albums</span></h2>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="{{$album->album_art}}" alt="">
								</div>
								<div class="latest-content-info">
									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div>
										<h4>Dj Charlie White</h4>
										<p>Deep House</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="{{$album->album_art}}" alt="">
								</div>
								<div class="latest-content-info">
									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div>
										<h4>Aaron LaCrate</h4>
										<p>Trance, Rock</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="{{$album->album_art}}" alt="">
								</div>
								<div class="latest-content-info">
									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div>
										<h4>Dj Charlie White</h4>
										<p>Deep House</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="{{$album->album_art}}" alt="">
								</div>
								<div class="latest-content-info">
									<div class="meta">
										<div class="icon">
											<i class="fa fa-user"></i>
										</div>
										<h4>Aaron LaCrate</h4>
										<p>Trance, Rock</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
			</div>
			</div>
		</section>
	</main> <!-- end main content area -->

@endsection