<?php
	require 'include/common.php';
	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}
	$user_id=$_SESSION['id'];
	
	$message=$_GET['itemsid'];
	if($message=="confirmed"){
		$qry = "UPDATE `user_items` SET `status`='confirmed' WHERE `u_id`='$user_id' and `status`='Added to cart'";
		$run = mysqli_query($con,$qry) or die(mysqli_error($con));
	}
?>
<!doctype html>
<!--captureType is undefined
event.target.getElementByClassName(...)[i] is undefined-->
<html>
	<head>
		<title>Shopping Success</title>
		<?php
			require 'include/links.php';
		?>

	</head>
	<body>
	
	<div class="whole_container success-page">
		
		<div class="success-tab">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="success-txt text-center">
								<h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
								<p align="center">Click <a href="shop.php">here</a> to purchase any other item.</p>
								<h3>OR</h3>
								<p>Go To <a href="index.php">Home Page</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
							<div class="copyright_content">
	Shop4U made by <a href="#" target="_blank">Rishabh Mishra</a>
	</div>
							<div class="ml-sm-auto">
								<div class="footer_social">
									<ul class="">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#"><i class="fab fa-google"></i></a></li>
										<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html> 
