<!-- Try voteryte -->
<link rel="stylesheet" href="css/try-voteryte.css">
<section class="try-voteryte">
	<div class="try-voteryte-right-shape"></div>
	
	<div class="container content">
		<h2>
			<?php 
				$path = $_SERVER['REQUEST_URI'];
				$splitted = explode('/', $path);
				$endpoint = $splitted[count($splitted) - 1];

				if($endpoint == 'contestants.php'){
					echo 'Get the competitive advantage';
				}

				else {
					echo 'Ready to create your elections?';
				}

			?>
		</h2>

		<span class="subtitle">Sign up for free. No credit card required.</span>
		<div class="d-table cta-try-voteryte mx-auto my-4">
			<a class="btn btn-md text-capitalize get-started" href="https://app.voteryte.com/signup">Get Started</a>
			<a class="btn btn-md text-capitalize live-demo btn-outline-light ml-4" href="https://demo.voteryte.com">Live Demo</a>
		</div>
	</div>
</section>
