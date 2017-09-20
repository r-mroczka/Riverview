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
					<p style="color: white; text-shadow: 1px 1px 3px #000;">For more information, please call at <strong><em>828-772-9417</em></strong>, email us or use our online form. We are always happy to hear from you and answer any questions you might have.</p>
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

								mail('riverviewsoberhouse@gmail.com',
								'Riverview - Contact Form Submission', $body,
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
					<br>280 Front St.		
					<br>New Haven, CT 06513
					<br>Phone: <a href="tel:+1-828-772-0417">828-772-0417</a>
					<br>Email: <a href="mailto:riverviewsoberhouse@gmail.com" target="_blank">riverviewsoberhouse@gmail.com</a></address>
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
				<iframe src="https://www.google.com/maps/place/280+Front+St,+New+Haven,+CT+06513/@41.3134813,-72.8900873,17z/data=!3m1!4b1!4m5!3m4!1s0x89e7d76591a8c277:0xd0c5ff8ec1cbfe84!8m2!3d41.3134813!4d-72.8878986" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
					<img style="width: 100%;" src="./images/riverview-sober-house-exterior.jpg" alt="Riverview Sober House Exterior" />
				</div>

				<div class="col-lg-4 col-md-4">
					<h4 class="text-center" style="padding-top: 10%;">GET IN TOUCH</h4>
					<br>
					<address class="text-center" style="padding-bottom: 10%">
					<strong>Riverview Sober House</strong><br>
					<span style="font-size: 11px;"><em>QUALITY SOBER HOUSING</em></span><br>
					280 Front St.<br>
					New Haven, CT 06513<br>
					828-772-0417<br>
					contact@riverviewsoberhouse.com
					</address>
				</div>

				<div class="col-lg-4 col-md-4">
					<img style="width: 100%;" src="./images/riverview-quinnipiac-river-small.jpg" alt="Riverview of Quinnipiac River" />
				</div>
			</div>
		</div>
	</div>
</section>
			
<?php include_once("./includes/footer.php") ?>