<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>404</title>
</head>
<body>
	<?php
		$this->load->view('header');
	?>
	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> 404 Error</div>
	</section>
	<section id="tagline">
		<div class="container">
			<h1>404 Error</h1>
			<h4>Commodo sollicitudin mi ligula bibendum sem</h4>
		</div>
	</section>
	<main>
		<section id="content">
			<div class="container">
				<div class="error-404">
					<h1>404</h1>
					<h2>Whoops! Something's gone wrong</h2>
					<p>Sorry, the page you have requested has either been moved, or does not exist. <a href="index.html">Return to our homepage.</a></p>
				</div>
			</div>
		</section>
	</main>
	<?php
		$this->load->view('footer');
	?>
</body>
</html>