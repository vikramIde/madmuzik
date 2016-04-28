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
									<!-- <p>{{$album->artist_title}}</p> -->
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
				</div>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->

@endsection