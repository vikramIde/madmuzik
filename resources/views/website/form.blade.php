@extends('website.app')
@section('content')
	<section id="breadcrumbs">
		<div class="container"><a href="index.html">Home</a> <i class="fa fa-angle-double-right"></i> Who We Are ?</div>
	</section>
	<section id="tagline">
		<div class="container">
			<h1>Form</h1>
		</div>
	</section>
	<main>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 artists-desc">
						<form action="mail.php" method="post" name="contact-form" id="contact-form">
							<label for="name">Your Name <span>*</span></label>
							<input type="text" name="name" id="name" value="" required="">
							<label for="email">Your E-Mail <span>*</span></label>
							<input type="email" name="email" id="email" value="" required="">
							<label for="email">Subject</label>
							<input type="text" name="subject" id="subject" value="">
							<label for="message">Your Message</label>
							<textarea name="message" id="message"></textarea>
							<div class="row">
								<div class="col-sm-6">
									<input type="submit" name="sendmessage" id="sendmessage" value="Send Message">
								</div>
								<div class="col-sm-6 dynamic"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main> 
@endsection
