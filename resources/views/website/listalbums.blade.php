@extends('website.app')
@section('content')
<style>
   .meta a{    line-height: 30px;} 
</style>
	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Albums</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Albums / Discography</h1>
			<h4>Donec porttitor quam nunc vitae semper sem fringilla.</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 albums-desc">
						<p>Nullam eu lectus et tellus malesuada bibendum sed a nisl. Praesent iaculis sem nisi, sed molestie est ullamcorper vitae. Praesent ac tincidunt eros. Duis eget urna convallis, faucibus magna vel, auctor justo. Proin et scelerisque dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">See below album list.</a></p>
					</div>
				</div>
				<div class="row albums">
					@foreach($albumList as $album)
					<div class="col-sm-6 col-md-3 album pop">
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewalbum/'.$album->id ) }}">
								<div class="latest-content-image">
								@if($album->album_art !='')
									<img src="{{$album->album_art}}" alt="" />
								@else
								  <img src="{{asset('/images/music1.png')}}" alt="" />
								@endif
								</div>
								<div class="latest-content-info">
									<div class="meta">
										<div class="icon">
											<i class="fa fa-headphones"></i>
										</div>
										<h4><a href="{{ URL::to('/site/viewalbum/'.$album->id ) }}" >{{$album->album_name}}</a></h4>
										<p>	</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					@endforeach					
				</div>
			</div>

			<!-- <ul class="pagination">
				<li class="current"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
			</ul> -->
		</section>
	</main> <!-- end main content area -->

@endsection