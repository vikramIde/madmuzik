<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Event CountDown</title>
</head>
<body>

 <?php
 $this->load->view('header');
?>

	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Event Countdown</div>
	</section>

	<section id="tagline">
		<div class="container">
			<h1>Event Countdown</h1>
			<h4>Commodo sollicitudin mi ligula bibendum sem</h4>
		</div>
	</section>

	<!-- main content area -->
	<main>
		<section id="content">
			<div class="container">
				<div class="event-countdown">
					<div class="row">
						<div class="col-sm-6 event-logo">
							<img src="images/event-logo.png" alt="" />
						</div>
						<div class="col-sm-6">
							<a href="#" class="register">Register Now</a>
						</div>
					</div>
					<h2>Our Festival 25 dec. - 30 dec. 2014</h2>
					<div id="countdown"></div>
					<script type="text/javascript">
						$('#countdown').countdown({
							timestamp	: new Date(2014, 2, 14), // year, month (starting at 0), day
							callback	: function(days, hours, minutes, seconds) {
								updateTime('#countdown', days, hours, minutes, seconds);
							}
						});
					</script>
					<h4 class="time-units">
						<span>Days</span>
						<span>Hours</span>
						<span>Min</span>
						<span>Sec</span>
					</h4>
					<a href="#" class="buy-ticket">Buy Ticket</a>
					<h3>Lorem ipsum dolor sit amet consectetur adipiscing elit</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar arcu neque, eget aliquam sapien euismod sed. Etiam consectetur arcu quam, eu dapibus dolor pellentesque ac. Duis bibendum diam non erat facilisis tincidunt. Fusce leo neque, lacinia at tempor vitae, porta at arcu.</p>
				</div>
			</div>
		</section>
	</main> <!-- end main content area -->



	 <?php
 $this->load->view('footer');
?>
</body>
</html>