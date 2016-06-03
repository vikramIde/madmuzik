@extends('website.app')
@section('content')
<style>
	.action-buttons a {
    display: block;
    text-transform: uppercase;
    height: 50px;
    width: 130px;
    line-height: 50px;
    color: white;
    background: #F69028;
    text-align: center;
    margin-right: 20px;
    margin-bottom: 20px;
    font-size: 22px;
    float: left;
}
</style>
<section id="breadcrumbs">
		<div class="container"><a href="">Home</a> <i class="fa fa-angle-double-right"></i> Donate</div>
	</section>

	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div id="content">
						<h2 class="fontface24">Donate</h2>
						<p>COMING SOON</p>
					</div>
				</div>

				<div class="row albums">
					@foreach($albumList as $album)
					<div class="col-sm-6 col-md-3 album pop">
						<div class="latest-content">
							<a href="{{ URL::to('/site/viewalbum/'.$album->id ) }}">
								<div class="latest-content-image">
								@if($album->album_art !='')
									<img src="{{asset($album->album_art)}}" alt="" />
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
											<div class="action-buttons">
												<a href="#">Buy Now</a>
											</div>
									</div>
								</div>
								
							</a>
						</div>
					</div>
					@endforeach					
				</div>
			</div>
		</section>
	</main> 
@endsection