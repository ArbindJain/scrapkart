@extends('main')

@section('title', 'Contact')

@section('content')


	<section id="contact" style="margin-bottom:30px;">
			<div class="container padding-top-bottom ">
				<header class="section-header ">
					<h1 class="scrollimation scale-in in">Contact us</h1><br></br>
				</header>
				<div class="row">
					<form class="col-xs-12 col-sm-12 col-md-6" action="" method="post" novalidate="" id="contact-form">
						<div class="form-group">
							<label class="control-label" for="contact-name">Name</label>
							<div class="controls">
								<input id="contact-name" name="contactName" placeholder="Your name" class="form-control input-lg requiredField" type="text" data-error-empty="Please enter your name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="contact-mail">Email</label>
							<div class=" controls">
								<input id="contact-mail" name="email" placeholder="Your email" class="form-control input-lg input-llg requiredField" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="contact-message">Message</label>
							<div class="controls">
								<textarea id="contact-message" name="comments" placeholder="Your message" class="form-control input-lg requiredField" rows="5" data-error-empty="Please enter your message"></textarea>
							</div>
						</div>
						<p>
							<button name="submit" type="submit" class="btn btn-success btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent">
							<i class="icon-location-arrow"></i>Send Message</button></p>
						<input type="hidden" name="submitted" id="submitted" value="true">
					</form>
					<div class="col-xs-12 col-sm-12 col-md-5 margin-60 margin-top-10 contact-info">
						<p></p>
						<address>
							<!--<h2>Gemba Concept </h2>
							<i class="fa fa-map-marker"></i>
							<span style="margin-left:5px;">
							No.14 Jain Temple Road<br></span>
							<span style="margin-left:15px;">Sajjan Rao Circle V V Puram<br></span>
							<span style="margin-left:15px;">Bangalore 560004<br></span>
							<span style="margin-left:15px;">Karnataka - India</span>
							<br></br>-->
							<h3>Write to us at:</h3>
							<i class="fa fa-envelope-o fa-2x"></i>
							<span style="margin-left:5px; font-size:20px; font-weight:300;">
							support@scrapkart.in<br></span>
							<br>
							<h3>Call us at:</h3>
							<i class="fa fa-mobile fa-2x"></i>
							<span style="margin-left:10px;font-size:20px;font-weight:300;">
							+91 9123456780<br></span>
							<i class="fa fa-phone fa-2x"></i>
							<span style="margin-left:5px;font-size:20px;font-weight:300;">
							+91 9123456780<br></span>
							<h3>Social Media:</h3>
							<span style="margin-left:4px; margin-top:8px;">
								<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-twitter fa-2x margin-7"></i></a>
								<a href="#"><i class="fa fa-linkedin-square fa-2x margin-7"></i></a>
							</span>
						</address>
					</div>
				</div>
			</div>
		</section>
@stop