@extends('website.app')
@section('content')

<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Party Calendar</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="">
				<div class="row">
					<div id="content">
						<h2 class="music fontface24">Mad Party Calendar</h2>

						<table id="party">
							<tbody><tr>
								<th width="300">Name</th>
								<th width="150">Location</th>
								<th width="150">Type</th>
								<th width="150">Date</th>
							</tr>

							<tr>
								<td class="">
									<a class="f-left" href="http://www.madmuzik.net/site/view_calendar/3/en" title="Escale sonore">Escale sonore</a>
								</td>
								<td class="">
									France		</td>
								<td class="">
									Party		</td>
								<td class="">
									0000-00-00		</td>
							</tr>
						</tbody></table>
						<div class="clear"></div>
						</div>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->

	@endsection