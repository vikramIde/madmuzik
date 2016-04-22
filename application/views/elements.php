<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Elements</title>
</head>
<body>

 <?php
 $this->load->view('elements');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Elements</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Elements</h1>
			<h4>Commodo sollicitudin mi ligula bibendum sem</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<h2>Buttons</h2>
				<h4 class="margin">Outline Buttons Colored</h4>
				<div class="row margin">
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-lg btn-outline btn-colored">Colored Outline</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-outline btn-colored">Colored Outline</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-sm btn-outline btn-colored">Colored Outline</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-xs btn-outline btn-colored">Colored Outline</a>
					</div>
				</div>
				<div class="row margin">
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-lg btn-outline">Gray Outline</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-outline">Gray Outline</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-sm btn-outline">Gray Outline</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-xs btn-outline">Gray Outline</a>
					</div>
				</div>
				<h4 class="margin">Regular Buttons</h4>
				<div class="row margin">
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-lg btn-green">Large button</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-green">Normal button</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-sm btn-green">Small button</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-xs btn-green">Extra small button</a>
					</div>
				</div>
				<div class="row margin">
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-lg btn-colored">Large button</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-colored">Normal button</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-sm btn-colored">Small button</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-xs btn-colored">Extra small button</a>
					</div>
				</div>
				<div class="row margin">
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-lg btn-gray">Large button</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-gray">Normal button</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-sm btn-gray">Small button</a>
					</div>
					<div class="col-sm-6 col-md-3">
						<a href="#" class="btn btn-xs btn-gray">Extra small button</a>
					</div>
				</div>
				<div class="row margin">
					<div class="col-md-6">
						<h2>Accordion</h2>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="open">
											Collapsible Group Item #1
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<h5 class="colored">Some title here</h5>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Collapsible Group Item #2
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<h5 class="colored">Some title here</h5>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											Collapsible Group Item #3
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<h5 class="colored">Some title here</h5>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h2>Toggle</h2>
						<div class="panel-group toggle" id="toggle">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#toggle" href="#toggleOne" class="open">
											Toggle Item #1
										</a>
									</h4>
								</div>
								<div id="toggleOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<h5 class="colored">Title #1</h5>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#toggle" href="#toggleTwo">
											Toggle Item #2
										</a>
									</h4>
								</div>
								<div id="toggleTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<h5 class="colored">Title #2</h5>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#toggle" href="#toggleThree">
											Toggle Item #3
										</a>
									</h4>
								</div>
								<div id="toggleThree" class="panel-collapse collapse">
									<div class="panel-body">
										<h5 class="colored">Title #3</h5>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h2 class="border">Tabs</h2>
				<div class="row margin">
					<div class="col-md-6">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#simple1" data-toggle="tab">Simple #1</a></li>
							<li><a href="#simple2" data-toggle="tab">Simple #2</a></li>
							<li><a href="#simple3" data-toggle="tab">Simple #3</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade in active" id="simple1">
								<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, also the leap into electronic.</p>
								<p>Typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
								<p>It was popularised in the 1960s with the release of Letraset sheets containing .</p>
							</div>
							<div class="tab-pane fade" id="simple2">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit, est at vulputate suscipit, ante leo consectetur neque, id viverra lectus nibh nec lacus. Sed mauris dui, commodo nec pulvinar nec, tincidunt non purus.</p>
							</div>
							<div class="tab-pane fade" id="simple3">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs outline-nav-tabs">
							<li class="active"><a href="#outline1" data-toggle="tab">Outline #1</a></li>
							<li><a href="#outline2" data-toggle="tab">Outline #2</a></li>
							<li><a href="#outline3" data-toggle="tab">Outline #3</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content outline-tab-content">
							<div class="tab-pane fade in active" id="outline1">
								<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, also the leap into electronic.</p>
								<p>Typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
								<p>It was popularised in the 1960s with the release of Letraset sheets containing .</p>
							</div>
							<div class="tab-pane fade" id="outline2">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit, est at vulputate suscipit, ante leo consectetur neque, id viverra lectus nibh nec lacus. Sed mauris dui, commodo nec pulvinar nec, tincidunt non purus.</p>
							</div>
							<div class="tab-pane fade" id="outline3">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.</p>
							</div>
						</div>
					</div>
				</div>
				<h2 class="border">Notifications</h2>
				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
							Well done! You successfully read this important alert message.
						</div>
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
							Heads up! This alert needs your attention, but it's not super important.
						</div>
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
							Warning! Best check yo self, you're not looking too good.
						</div>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
							Oh snap! Change a few things up and try submitting again.
						</div>
						<div class="alert">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
							This is just a regular notofications message.
						</div>
					</div>
				</div>
				<h2 class="border">Pagination</h2>
				<div class="row">
					<div class="col-xs-12">

					</div>
				</div>
				<p>Style 1</p>
				<div class="row margin pagination-style-1">
					<div class="col-sm-2">
						<a href="#" class="prev">Previous</a>
					</div>
					<div class="col-sm-8">
						<ul class="pagination">
							<li class="current"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<a href="#" class="next">Next</a>
					</div>
				</div>
				<p>Style 2</p>
				<div class="row margin pagination-style-2">
					<div class="col-sm-2">
						<a href="#" class="prev">Previous</a>
					</div>
					<div class="col-sm-8">
						<ul class="pagination">
							<li class="current"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<a href="#" class="next">Next</a>
					</div>
				</div>
				<p>Style 3</p>
				<div class="row margin pagination-style-3">
					<div class="col-sm-2">
						<a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<div class="col-sm-8">
						<ul class="pagination">
							<li class="current"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->

	 <?php
 $this->load->view('footer');
?>
</body>
</html>