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
					<div class="col-sm-4 col-md-3">
						@foreach($artistDetail as $artist)
						<div class="latest-content">
							<div class="latest-content-image">
								<img src="{{$artist->artist_image}}" alt="" class="img-responsive"/>
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
						@endforeach
					</div>
					<div class="col-sm-8 col-md-9">
						<h3>Biography Heading of Artist</h3>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
						<h4>Smaller heading</h4>
						<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie.</p>
					</div>
				</div>
				<!--<div class="col-md-4 rightlinks">
					<div class="rightbar">
						<ul>
							<h3>Links</h3>
							<li><h4 class="orange">WEBSITE: <span class="white">{{$artist->artist_fb}}</span></h4></li>
							<li><h4 class="orange">SOUNDCLOUD: <span class="white">{{$artist->artist_fb}}</span></h4></li>
							<li class="social"><h4 class="orange">SOCIAL: </h4>
								<ul>
									<li><a href="{{$artist->artist_fb}}"><img src="{{asset('/images/fb.png')}}" class="img-responsive socialicon"/></a></li>
									<li><a href="{{$artist->artist_fb}}"><img src="{{asset('/images/twitter.png')}}" class="img-responsive socialicon"/></a></li>
									<li><a href="{{$artist->artist_fb}}"><img src="{{asset('/images/google.png')}}" class="img-responsive socialicon"/></a></li>
								</ul>
							</li>
							<li><h4 class="orange">PHONE: <span class="white">{{$artist->artist_phone}}</span></h4></li><br/>
							<h3><a href="{{ url('/site/connect') }}" style="text-decoration:underline">Contact Us</a></h3>
							<h3>Other Artists</h3>
							<li><a href="{{ url('/site/connect') }}"><h4 class="orange">Arcane</h4></a></li>
							<li><a href="{{ url('/site/connect') }}"><h4 class="orange">ESP</h4></a></li>
							<li><a href="{{ url('/site/connect') }}"><h4 class="orange">Tronix</h4></a></li>
							<li><a href="{{ url('/site/connect') }}"><h4 class="orange">Veav</h4></a></li>
						</ul>
					</div>
				</div>-->
				<h2>Featured <span>Artists</span></h2>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="latest-content">
							<a href="#">
								<div class="latest-content-image">
									<img src="{{$artist->artist_image}}" alt="">
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
									<img src="{{$artist->artist_image}}" alt="">
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
									<img src="{{$artist->artist_image}}" alt="">
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
									<img src="{{$artist->artist_image}}" alt="">
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
		</section>
	</main> 
@endsection