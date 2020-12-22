<!doctype html>
<!--captureType is undefined
event.target.getElementByClassName(...)[i] is undefined-->
<html>
	<head>
		<title>Shop4U Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="">
		<style>
		body{background:#a54bf4;}
		
		.navbar{
			margin-bottom:0;
		}
		.collapse.bg-2{
			padding:15px 0;
		}
		.bg-2 {
			background-color: #474e5d; /* Dark Blue */
			color: #ffffff;
		}
		.footer{padding:30px 0}
		input[type=search]{
			width:80%;
			border:none;background:transparent;
			border-bottom:1px solid #fff;
		}
		input[type=search]::placeholder{
			margin-left:auto;color:#fff;
		}
		button[type=search]{
			border:none;vertical-align:middle;
			background:none;color:#fff;
		}
		button[type=search]:hover{
			color:#e03860;
		}
		:focus {
			outline: unset;
		}
		.reduce-autosize{
			padding:6px 10px;
		}
		.animated-slider{
			margin:20px 0;
			box-shadow:9px 2px 9px 2px #a54bf4,9px 6px 26px 8px #ff554c,7px 5px 15px 5px #e03860
		}
		</style>
	</head>
	<body>
	<?php require 'include/header.php';?>
	<div class="animated-slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="img/macpro.jpg" alt="Los Angeles">
			</div>

			<div class="item">
				<img src="img/airpod.jpg" alt="Chicago">
			</div>

			<div class="item">
				<img src="img/smart-watch.jpg" alt="New York">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
	<footer class="sticky-footer footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Follow Us</h3>
				</div>
				<div class="col-sm-4">
					<h3>Follow Us</h3>
				</div>
				<div class="col-sm-4">
					<h3>Follow Us</h3>
				</div>
			</div>
		<div>
	</footer>
	<?php 
		$con=mysqli_connect('localhost','root','','ecommarce') or die(mysqli_error($con));
		$qry = "SELECT `img_name` FROM `image` WHERE 1";
		$run=mysqli_query($con,$qry) or die(mysqli_error($con));
		$row = mysqli_fetch_array($run);
	?>
	<div class="container">
		<img src="<?php echo $row['img_name'];?>" width="100%">
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>