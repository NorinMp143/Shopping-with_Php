<header class="header">
			<div class="top_bar hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="img/phone.png" alt=""></div>
								+91 123 456 7890
							</div>
							<div class="top_bar_contact_item">
								<div class="top_bar_icon"><img src="img/mail.png" alt=""></div>
								store@shopping.com
							</div>
							<div class="top_bar_content ml-auto">
								<div class="top_bar_menu">
									<ul class="standard_dropdown top_bar_dropdown">
										<li>
											<a href="#">English</a>
											<ul>
												<li><a href="#">Hindi</a></li>
												<li><a href="#">Gujarati</a></li>
												<li><a href="#">Marathi</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="top_bar_user">
									<?php
										if(isset($_SESSION['email'])){
										$mail = $_SESSION["email"];
										$qry = "SELECT * FROM user WHERE email = '$mail'";
										$run = mysqli_query($con,$qry) or die(mysqli_error($con));
										$row = mysqli_fetch_array($run);
										$owner = $row['name'];
									?>
											<div class="user_icon">
												<a href="#"><i class="fas fa-user white-text"></i>
												<span>&nbsp;Hello, <?php echo $owner;?></span></a>
											</div>
											<div><a href="logout.php">Logout</a></div>
									<?php
										}
										else{
									?>
											<div><a href="sign.php">Register</a></div>
											<div><a href="login.php">Log in</a></div>
									<?php	}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.php">Shopping</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right hidden-sm">
						<div class="header_search">
							<form class="form-inline header_form">
								<div class="form-group search-box">
									<input type="search" class="form-control search" placeholder="Search Here....">
								</div>
								<div class="form-group select-box">
									<select  class="form-control select">
										<option value="-1">All Categories</option>
										<option value="computers">Computers</option>
										<option value="laptops">Laptops</option>
										<option value="cameras">Cameras</option>
										<option value="hardwares">Hardware</option>
										<option value="smartphones">Smartphones</option>
										<option value="tvs">TV</option>
										<option value="car_electronics">Car Electronics</option>
										<option value="games">Video Games</option>
										<option value="accessories">Accessories</option>
									</select>
								</div>
								<div class="form-group search-btn">
									<button type="submit" class="form-control btn btn-my-black btn-lg"><img src="img/search.png" alt=""></button>
								</div>
							</form>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><a href="#"><img src="img/heart.png" alt=""></a></div>
								<div class="wishlist_content">
									<?php
										if(isset($_SESSION['email'])){
											$id = $_SESSION["id"];
											$wish_qry = "SELECT * FROM user_items WHERE u_id = '$id' and status = 'Added to wish'";
											$wish_run = mysqli_query($con,$wish_qry) or die(mysqli_error($con));
											$wish_row = mysqli_num_rows($wish_run);
											
											?>
											<div class="wishlist_text"><a href="wishlist.php">Wishlist</a></div>
											<div class="wishlist_count"><a href="wishlist.php"><?php echo $wish_row;?></a></div>
											<?php
										}else{
											?>
											<div class="wishlist_text"><a href="login.php">Wishlist</a></div>
											<div class="wishlist_count"><a href="login.php">0</a></div>
											<?php
										}
									?>
									
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<?php
										if(isset($_SESSION['email'])){
											$id = $_SESSION["id"];
											$cart_qry = "SELECT * FROM user_items WHERE u_id = '$id' and status = 'Added to cart'";
											$cart_run = mysqli_query($con,$cart_qry) or die(mysqli_error($con));
											$cart_row = mysqli_num_rows($cart_run);
											require "include/cart-price-count.php";
											?>
											<div class="cart_icon">
												<a href="#"><img src="img/cart.png" alt=""></a>
												<div class="cart_count"><span><a href="cart.php"><?php echo $cart_row;?></a></span></div>
											</div>
											<div class="cart_content">
												<div class="cart_text"><a href="cart.php">Cart</a></div>
												<div class="cart_price"><a href="cart.php">Rs <?php echo count_cart_price($con);?></a></div>
											</div>
											<?php
										}else{
											?>
											<div class="cart_icon">
												<a href="#"><img src="img/cart.png" alt=""></a>
												<div class="cart_count"><span><a href="login.php">0</a></span></div>
											</div>
											<div class="cart_content">
												<div class="cart_text"><a href="login.php">Cart</a></div>
												<div class="cart_price"><a href="login.php">$0</a></div>
											</div>
											<?php
										}
									?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<li><a href="shop.php?category=computers">Computers</a></li>
									<li><a href="shop.php?category=cameras">Cameras & Photos</a></li>
									<li><a href="shop.php?category=hardwares">Hardware</a></li>
									<li><a href="shop.php?category=smartphones">Smartphones</a></li>
									<li><a href="shop.php?category=tvs">TV & Audio</a></li>
									<li><a href="shop.php?category=laptops">Laptops</a></li>
									<li><a href="shop.php?category=car_electronics">Car Electronics</a></li>
									<li><a href="shop.php?category=games">Video Games</a></li>
									<li><a href="shop.php?category=accessories">Accessories</a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home</a></li>
									<!-- <li><a href="#">Super Deals</a></li> -->
									<!-- <li class="hassubs">
										<a href="#">Featured Brands</a>
										<ul>
											<li><a href="shop.php?brand=apple">Apple</a></li>
											<li><a href="shop.php?brand=google">Google</a></li>
											<li><a href="shop.php?brand=oneplus">OnePlus</a></li>
											<li><a href="shop.php?brand=mi">MI</a></li>
										</ul>
									</li> -->
									<li>
										<a href="shop.php">Shop</a>
									</li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger" onclick="show('myNav')">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu" id="myNav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="shop.php" method="get">
									<input type="search" name="s" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children" onclick="show('lang')">
									<a>Language</a>
									<ul class="page_menu_selection" id="lang">
										<li><a href="#">English</a></li>
										<li><a href="#">Hindi</a></li>
										<li><a href="#">Gujarati</a></li>
										<li><a href="#">Marathi</a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="#">Home</a></li>
								<!--li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
								</li-->
								<!-- <li class="page_menu_item has-children" onclick="show('brand')">
									<a>Featured Brands</a>
									<ul class="page_menu_selection" id="brand">
										<li><a href="shop.php?brand=apple">Apple</a></li>
										<li><a href="shop.php?brand=google">Google</a></li>
										<li><a href="shop.php?brand=oneplus">OnePlus</a></li>
										<li><a href="shop.php?brand=mi">MI</a></li>
									</ul>
								</li> -->
								<li class="page_menu_item"><a href="blog.php">blog</a></li>
								<li class="page_menu_item"><a href="contact.php">contact</a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="img/phone_white.png" alt=""></div>+91 123 456 7890</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="img/mail_white.png" alt=""></div><a href="mailto:info@shop4U.com">info@shop4U.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</header>
