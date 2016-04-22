<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tables</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Tables</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Tables</h1>
			<h4>Commodo sollicitudin mi ligula bibendum sem</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<h2 class="border">Tables</h2>
				<h4 class="colored">Basic Example</h4>
				<div class="row">
					<div class="col-xs-12">
						<div class="table-container table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="center">#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="center">1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<td class="center">2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<td class="center">3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<h4 class="colored">Striped Rows</h4>
				<div class="row">
					<div class="col-xs-12">
						<div class="table-container table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th class="center">#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="center">1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<td class="center">2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<td class="center">3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<h4 class="colored">Bordered Table</h4>
				<div class="row">
					<div class="col-xs-12 table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="center">#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td class="center">2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td class="center">3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<h4 class="colored">Table</h4>
				<div class="row">
					<div class="col-xs-12 table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="center">#</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">1</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
								<tr>
									<td class="center">2</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
								<tr>
									<td class="center">3</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
								<tr>
									<td class="center">4</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<h4 class="colored">Outline Table</h4>
				<div class="row">
					<div class="col-xs-12 table-responsive">
						<table class="table table-condensed">
							<thead>
								<tr>
									<th class="center">#</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">1</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
								<tr>
									<td class="center">2</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
								<tr>
									<td class="center">3</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
								<tr>
									<td class="center">4</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
									<td>Table Cell</td>
								</tr>
							</tbody>
						</table>
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