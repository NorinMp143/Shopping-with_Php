<?php
	require 'include/common.php';
	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}
	$user_id = $_SESSION['id'];
	$wish_itm_select_qry = "SELECT * FROM user_items ui INNER JOIN items i ON ui.it_id=i.i_id and ui.u_id='$user_id' and ui.status='Added to wish'";
	$num=1;
	$wish_itm_run=mysqli_query($con,$wish_itm_select_qry);
?>
<!doctype html>
<html>
	<head>
		<title>Shopping Wishlist</title>
		<?php
			require 'include/links.php';
		?>

	</head>
	<body>
	
	<div class="whole_container">
		<?php
			require 'include/header.php';
		?>
		<div class="wish-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div><h2>Wishlist</h2></div>
						<div class="wish-items">
							<?php
							while ($row = mysqli_fetch_array($wish_itm_run)) {
							?>
							<div class="wish-idv-item-details d-flex flex-md-row flex-column justify-content-between align-items-center">
								<div class="detail-cell"><img src="img/<?php echo $row['img_path'];?>" alt="Macbook Air"></div>
								<div class="detail-cell">
									<div class="detail-title">Name</div>
									<div class="detail-info"><?php echo $row['i_name'];?></div>
								</div>
								<div class="detail-cell de-flex">
									<div class="detail-title">Color</div>
									<div class="detail-info"><?php echo $row['i_color'];?></div>
								</div>
								<div class="detail-cell de-flex">
									<div class="detail-title">Price</div>
									<div class="detail-info"><?php echo $row['i_price'];?></div>
								</div>
								<div class="detail-cell de-flex">
									<div class="order-icon">
										<a href="wish-remove.php?id=<?php echo $row['i_id'];?>" class="d-flex justify-content-center align-items-center"><i class="material-icons">&#xe872;</i></a>
									</div>
									<div class="order-icon">
										<a href="cart-update.php?id=<?php echo $row['i_id'];?>" class="d-flex justify-content-center align-items-center"><i class="material-icons">&#xe854;</i></a>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
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
