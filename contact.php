<?php 
if(!empty($_POST['webu'])) die();

if(isset($_POST['submit'])){
    $to = "hello@voteryte.com";
    $from = $_POST['mail'];
    $name = $_POST['name'];
    $subject = "Contact Form Submission";
    $message = $name. " wrote:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Message Sent. Thank you " . $name;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'inc/head-stuff.php' ?>
	<title>Contact Us | Voteryte</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<style>
			#contact-nav {
				border-bottom: 2px solid #8bc34a;
			}
			#whoareyou {
				display: none;
			}
		</style>
	</head>
<body>
   
<!-- Header -->
<!-- try-voteryte -->
<?php require 'inc/header.php' ?>

<!-- banner -->
<div class="banner contact-banner" id="top">
	<div class="container">
	</div>
</div>

<!-- Contact page -->
<section class="contact py-5 my-lg-5">
	<div class="container">
		<h2 class="heading mb-sm-5 mb-4">Contact Us</h2>
		<div class="row contact_information">
				<div class="col-md-6 mt-md-0 mt-4">
					<div class="contact_right card p-lg-5 p-4">

						<form name="contact" method="POST" action="">
							<div class="form-row">
								<div class="form-group col-md-10">
									<label for="name">Your name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="phone">Phone</label>
									<input type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
								</div>
								<div class="form-group col-md-6">
									<label for="email">Your email</label>
									<input type="email" name="mail" class="form-control" id="email" placeholder="" required>
									<input type="text" id="whoareyou" name="webu"/>
								</div>
							</div>
							<div class="form-row">
								
								<div class="form-group col-md-10">
									<label for="message">Your message</label>
									<textarea name="message" class="form-control" height="300px" placeholder="Your Message Here..." required></textarea>
								</div>
							</div>
							<div class="g-recaptcha" data-sitekey="6Ld5dLMUAAAAACWlZHd88CZwbU9_cXhbxB9ghvaa"></div> <br/>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			<div class="col-md-6 contact_left">
				<div class="contact_border p-4">
					<img src="images/contact-us.svg" alt="contact_us" class="img-fluid">
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6">
				<div class="mt-5 information">
					<h4 class="text-uppercase mb-4"><span class="fa fa-comments"></span> General</h4>
					<p class="mb-3">For General Queries, partnership, volume pricing, recommendations, Please send us an email at <a href="mailto:hello@voteryte.com">hello@voteryte.com</a></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 mt-md-5 mt-2 information">
				<h4 class="text-uppercase mb-4"><span class="fa fa-life-ring"></span> Technical Support</h4>
				<p class="mb-3">We are here to help! If you have technical issues, contact Support <br> <a href="mailto:support@voteryte.com">support@voteryte.com</a>.</p>
			</div>
		</div>
	</div>
</section>

<!-- try-voteryte -->
<?php require 'inc/try-voteryte.php' ?>

<!-- footer -->
<?php require 'inc/footer.php' ?>

</body>
</html>