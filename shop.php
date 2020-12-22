<?php
    require 'include/common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog - Shopping</title>
	<?php
			require 'include/links.php';
		?>
</head>
<body>
	<div class="whole_container">
		<?php
			require 'include/header.php';
		?>
		<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								<li><a href="#">Computers & Laptops</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
								<li><a href="#">Gadgets</a></li>
								<li><a href="#">Car Electronics</a></li>
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<p>
									Range: <a href="">Rs. 0 - 5000</a><br>
									Range: <a href="">Rs. 5000 - 10000</a><br>
									Range: <a href="">Rs. 10000 - 15000</a><br>
								</p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								<li class="brand"><a href="#">Apple</a></li>
								<li class="brand"><a href="#">Beoplay</a></li>
								<li class="brand"><a href="#">Google</a></li>
								<li class="brand"><a href="#">Meizu</a></li>
								<li class="brand"><a href="#">OnePlus</a></li>
								<li class="brand"><a href="#">Samsung</a></li>
								<li class="brand"><a href="#">Sony</a></li>
								<li class="brand"><a href="#">Xiaomi</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></i></span>
										<ul>
											<li class="shop_sorting_button">highest rated</li>
											<li class="shop_sorting_button">name</li>
											<li class="shop_sorting_button">price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="prods">
							<?php
							require 'check-if-added.php';
							$select_qry1 = "SELECT * FROM items";
							$run1=mysqli_query($con,$select_qry1);
							while ($row1 = mysqli_fetch_array($run1)) {
							?>
	                            <div class="prod">
	                                <div class="prod_img">
	                                    <img src="img/<?php echo $row1['img_path'];?>" alt="">
	                                </div>
	                                <div class="prod_details">
	                                    <div class="prod-name"><?php echo $row1['i_name'];?></div>
	                                    <div class="prod-price">Price : <?php echo $row1['i_price'];?>Rs</div>
	                                </div>
	                                <?php if(!isset($_SESSION['email'])){?>
	                                <div class="buynow">
										<a href="">Buy Now</a>
	                                </div>
	                            <?php }else{
	                            	$iid = $row1['i_id'];
	                            	if(check_if_added_to_cart($row1['i_id'])){
	                            		
								echo '<div class="addto">
	                            		<div>Added to</div>
	                            		<a href="wish-update.php?id='. $iid .'">
	                            			<abbr title="Added to Wishlist"><div class="atwish adder">
	                            			<i class="fas fa-heart"></i>
	                            			
	                            		</div></abbr></a>
	                            	</div>';
									}
									elseif(check_if_added_to_wish($row1['i_id'])){
										echo '<div class="addto">
	                            		<div>Added to</div>
	                            		<a href="cart-update.php?id=' .$iid.'">
	                            			<abbr title="Added to Cart">
	                            				<div class="atcart adder">
	                            			<i class="material-icons">&#xe854;</i>
	                            			</div></abbr></a>
	                            	</div>';
									}
									else{
										?>
	                            	<div class="addto">
	                            		<div>Added to</div>
	                            		<a href="wish-add.php?id=<?php echo $iid;?>">
	                            			<abbr title="Added to Wishlist"><div class="atwish adder">
	                            			<i class="fas fa-heart"></i>
	                            			
	                            		</div></abbr></a>
	                            		<a href="cart-add.php?id=<?php echo $iid;?>">
	                            			<abbr title="Added to Cart">
	                            				<div class="atcart adder">
	                            			<i class="material-icons">&#xe854;</i>
	                            			</div></abbr>
	                            		</a>
	                            	</div>
	                            	<?php
	                            	}
	                            }?>
	                            </div>
							<?php } ?>
                        </div>

					</div>

				</div>
			</div>
		</div>
	</div>
<?php
			include 'include/footer.php';
		?>
    </div>
</body>
</html>
