	<div id="top-bar">
		<div class="container">
			<div id="site-description">Welcome to MadMuzik.net.</div>
			<ul id="top-links">
				<li class="facebook"><a href="#"></a></li>
				<li class="twitter"><a href="#"></a></li>
				<li class="google-plus"><a href="#"></a></li>
				<li class="youtube"><a href="#"></a></li>
				<li class="search">
					<input type="text" value="" name="search" id="top-search" />		
					<a href="#"></a>
				</li>
			</ul>
		</div>
	</div> 

	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href=""><img src="{{asset('/images/logo.png')}}" alt="MadMuzik" /></a>
				</div>
				<div class="collapse navbar-collapse" id="main-nav">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/site/home') }}"><i class="fa fa-home orange"></i>  Home</a></li>
						<li><a href="{{ url('/site/aboutus') }}"><i class="fa fa-user orange"></i> About Us</a></li>
						<li><a href="{{ url('/site/listalbums') }}" ><i class="fa fa-music orange"></i> Music</a></li>
						<li><a href="{{ url('/site/listartist') }}"><i class="fa fa-headphones orange"></i> Team</a></li>
						<li><a  href="{{ url('/site/shop') }}" ><i class="fa fa-shopping-bag orange"></i> Shop</a></li>
						<!--<li class="dropdown">
							<a href="" class="dropdown-toggle disabled" data-toggle="dropdown">Blog <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="../Blog/">Blog Regular</a></li>
								<li><a href="../Blogsingle/">Blog Single</a></li>
								<li><a href="../Bloggrid/">Blog Grid</a></li>
							</ul>
						</li>-->
						<li><a href="{{ url('/site/connect') }}" ><i class="fa fa-phone orange"></i> Connect</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>