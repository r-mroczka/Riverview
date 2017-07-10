<?php 
$page_title = 'Riverview Sober House - Sober Living in New Haven, CT - Contact';
include_once("./includes/header.php") 
?>
	
<section class="home_page">
	<div class="jumbotron text-center">
		<div class="container">
			<div class="row" style="height: 350px;">
				<div class="col-xs-10 col-xs-offset-1">
					<h2 style=" color: black;">Contact Us Today!</h2>
					<p style="color: white; text-shadow: 1px 1px 3px #000;">For more information, please use our online form, email us, or call by phone at <strong><em>203-888-1234</em></strong>. We are always happy to hear from you and answer any questions you might have.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container well" style="background-color: black; color: #7c7b7b; border: none;">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-md-5 col-md-offset-1 text-center">
				<div style="width: 90%; margin: 0 auto;">
					<h2>Contact</h2>

						<?php
						//check for submission
						if (isset($_POST['submitted'])) {

							if (!empty($_POST['name']) &&
							!empty($_POST['email']) &&
							!empty($_POST['subject']) &&
							!empty($_POST['comments'])) {

								$body = "Name:
								{$_POST['name']}\n\nSubject:
								{$_POST['subject']}\n\nComments:
								{$_POST['comments']}";

								$body = wordwrap($body, 70);

								mail('contact@riverviewsoberhouse.com',
								'ADD - Contact Form Submission', $body,
								"From: {$_POST['email']}");

								echo '<p class="text-center alert alert-success"><em><strong>Thank you for taking the time to contact us.<br /> We will reply shortly.</strong></em></p>';

								//clear $_POST
								$_POST = array();

							} else {
								echo '<p class="text-center alert alert-danger"><strong>Please complete the required fields!</strong></p>';
							}
						}
					?>

					<!-- Contact page form -->	
					<div id="contact_form" class="text-left">
						<form action="contact.php" method="post">
							<fieldset>

							<label for="name">*Name</label><br /> 
							<input id="name" type="text" name="name" maxlength="60"  value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" />

							<br />
							<br />

							<label for="email">*Email</label><br />
							<input id="email" type="text" name="email" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />

							<br />
							<br />

							<label for="subject">*Subject</label><br />
							<input id="subject" type="text" name="subject" maxlength="60" value="<?php if (isset($_POST['subject'])) echo $_POST['subject']; ?>" />

							<br />
							<br />

							<label for="comments">*Comments</label><br />
							<textarea id="comments" name="comments" rows="6"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea>

							<br />
							<br />

							<input class="submit" type="submit" name="submit" value="Submit" />
							<input type="hidden" name="submitted" value="true" />

							<br />

							<small class="error">* denotes required fields</small>

							</fieldset>
						</form>

					</div>
					<!-- /contact page form -->
				</div>
			</div>
			<!-- /col -->

			<div class="col-md-5 text-center">
				<div style="width: 90%; margin: 0 auto;">
					<address><h2 style="margin-bottom: 0">Riverview Sober House</h2>		
					<br />New Haven, CT 06513
					<br />Phone: <a href="tel:+12038881234">203-888-1234</a>
					<br />Email: <a href="mailto:contact@riverviewsoberhouse.com" target="_blank">contact@riverviewsoberhouse</a></address>
					<img style="margin: 10px auto;" width="95%" src="./images/riverview-sober-house-backyard.jpg" alt="Outside of Riverview Sober House"/>
				</div>	
		    </div>
      		<!-- /col -->
       	</div>
       	<!-- /row -->      	     	
	</div>
	<!-- /container well -->
	
    <div class="container well" style="background-color: black; color: #7c7b7b; border: none;">
        <div class="row" style="margin-top: 20px;">
       		<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.863046150095!2d-72.89120538446637!3d41.31184287927112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7d7650276aeb5%3A0x83c09b5d9e0cdd49!2sFront+St%2C+New+Haven%2C+CT+06513!5e0!3m2!1sen!2sus!4v1498900639551" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		    </div>
      		<!-- /col -->
       	</div>
       	<!-- /row -->
	</div>
</section>

<section>	
	<div class="section well">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<img src="./images/riverview-sober-house-exterior.jpg" alt="Riverview Sober House Exterior" width="100%" />
				</div>

				<div class="col-lg-4 col-md-4">
					<h4 class="text-center" style="padding-top: 10%;">GET IN TOUCH</h4>
					<br>
					<address class="text-center" style="padding-bottom: 10%">
					<strong>Riverview Sober House</strong><br>
					<span style="font-size: 11px;"><em>QUALITY SOBER HOUSING</em></span><br>
					New Haven, CT 06513<br>
					203-888-1234<br>
					contact@riverviewsoberhouse.com
					</address>
				</div>

				<div class="col-lg-4 col-md-4">
					<img src="./images/riverview-quinnipiac-river-small.jpg" alt="Riverview of Quinnipiac River" width="100%" />
				</div>
			</div>
		</div>
	</div>
</section>
			
<?php include_once("./includes/footer.php") ?>