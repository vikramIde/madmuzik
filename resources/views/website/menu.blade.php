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
						<li class="current"><a href="{{ url('/site/home') }}">Home</a></li>
						<li class=""><a href="{{ url('/site/aboutus') }}">About Us</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle disabled" data-toggle="dropdown">Music <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('/site/listalbums') }}" >List Albums</a></li>
								<li><a href="{{ url('/site/viewalbum') }}" >View Album</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle disabled" data-toggle="dropdown">Team <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('/site/listartiste') }}" >List Artiste</a></li>
								<li><a href="{{ url('/site/viewartiste') }}" >View Artiste</a></li>
							</ul>
						</li>
						<li class=""><a  href="{{ url('/site/shop') }}" >Shop</a></li>
						<!--<li class="dropdown">
							<a href="" class="dropdown-toggle disabled" data-toggle="dropdown">Blog <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="../Blog/">Blog Regular</a></li>
								<li><a href="../Blogsingle/">Blog Single</a></li>
								<li><a href="../Bloggrid/">Blog Grid</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle disabled" data-toggle="dropdown">Events <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="../Events/">Events Overview</a></li>
								<li><a href="../Eventdetails/">Event Details 1</a></li>
								<li><a href="../Eventcountdown/">Event Countdown</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle disabled" data-toggle="dropdown">Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="../404/">404 Page</a></li>
								<li><a href="../Gallery/">Galleries</a></li>
								<li><a href="../Video/">Videos</a></li>
								<li><a href="../Typography/">Typography</a></li>
								<li><a href="../Tables/">Tables</a></li>
							</ul>
						</li>-->
						<li><a href="{{ url('/site/connect') }}" >Connect</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>