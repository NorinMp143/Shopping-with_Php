<!doctype html>
<!--captureType is undefined
event.target.getElementByClassName(...)[i] is undefined-->
<html>
	<head>
		<title>Shoping Contact</title>
		<?php
			require 'include/links.php';
		?>
	</head>
	<body>
	
	<div class="whole_container">
		<?php
			require 'include/header.php';
		?>
		
		<!-- Contact Info -->

		<div class="contact_info">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

							<!-- Contact Item -->
							<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
								<div class="contact_info_image"><img src="img/contact_1.png" alt=""></div>
								<div class="contact_info_content">
									<div class="contact_info_title">Phone</div>
									<div class="contact_info_text">+91 7985475770</div>
								</div>
							</div>

							<!-- Contact Item -->
							<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
								<div class="contact_info_image"><img src="img/contact_2.png" alt=""></div>
								<div class="contact_info_content">
									<div class="contact_info_title">Email</div>
									<div class="contact_info_text">4798rishabh@gmail.com</div>
								</div>
							</div>

							<!-- Contact Item -->
							<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
								<div class="contact_info_image"><img src="img/contact_3.png" alt=""></div>
								<div class="contact_info_content">
									<div class="contact_info_title">Address</div>
									<div class="contact_info_text">Lovely Professional University Phagawara, Punjab</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Form -->

		<div class="contact_form">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact_form_container">
							<div class="contact_form_title">Get in Touch</div>

							<form action="#" class="form_control">
								<div class="widthset d-flex flex-md-row flex-column justify-content-between align-items-between">
									<input type="name" class="form-control" placeholder="Your name" required="required" data-error="Name is required.">
									<input type="email" class="form-control" placeholder="Your email" required="required" data-error="Email is required.">
									<input type="number" class="form-control" placeholder="Your phone number">
								</div>
								<div class="bottomset">
									<textarea class="form-control" name="message" rows="6" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								</div>
								<div class="bottomset">
									<button type="submit" class="btn btn-primary btn-lg">Send Message</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="panel"></div>
		</div>

		<?php
			include 'include/footer.php';
		?>
	</div>
	<script>
		function show(x){
			var v=document.getElementById(x);
			if(v.style.display=="none"){
				v.style.display='block';
			}
			else{
				v.style.display='none';
			}
		}
	</script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html> 
