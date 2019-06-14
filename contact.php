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
							<div class="">
								<!-- <h3 class="mb-3">Contact form</h3> -->
								<input type="text" name="name" placeholder="Your Full Name" required="">
								<input type="email" name="mail" placeholder="Your Email" required="">
								<input type="text" id="whoareyou" name="webu"/>
								<input type="text" name="phone" placeholder="Phone Number">
								<textarea name="message" placeholder="Your Message Here..." required=""></textarea>
							</div>
							<div class="">
								<button type="submit" name="submit">Submit</button>
							</div>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			<div class="col-md-6 contact_left">
				<div class="contact_border p-4">
					<img src="images/contact-us.svg" alt="contact_us">
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