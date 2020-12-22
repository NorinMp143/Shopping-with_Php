<?php
	require 'include/common.php';
?>
<!doctype html>
<html>
	<head>
		<title>Shopping Store</title>
		<?php
			require 'include/links.php';
		?>
	</head>
	<body>
	
	<div class="whole_container">
		<?php
			require 'include/header.php';
		?>
		
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" ></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="img/banner_product.png" alt=""></div>
				<div class="col-lg-4 iphone6s"><img src="img/apple6s.jpg" alt=""></div>
				<div class="col-lg-5 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of smartphones</h1>
						<div class="banner_price"><span>Rs.45300</span>Rs.34600</div>
						<div class="banner_product_name">Apple Iphone 6s</div>
						<div class="button banner_button"><a href="#" class="btn btn-lg btn-my">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="img/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="img/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Easy Exchange</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="img/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Cash On Delivery</div>
							<div class="char_subtitle">from Rs.500</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="img/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Easy Return</div>
							<div class="char_subtitle">Without Money</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Popular Categories -->

	<div class="popular-categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular-categories-content">
						<div class="popular-categories-title">Popular Categories</div>
						<div class="popular-categories-tag">
							<div class="popular-categories-hash"><i class="ml-auto">#LikE</i></div>
							<div class="popular-categories-hash"><i class="ml-auto">#ShArE</i></div>
						</div>
						<div class="popular_categories_link"><a href="#">full catalog</a></div>
					</div>
				</div>
				
				<!-- Popular Categories Slider -->

				<div class="col-lg-9">
					<div class="popular_categories_slider_container">
						<div class="d-flex flex-row">

							<!-- Popular Categories Item -->
							<div class="equal-width faded-red-background">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="img/popular_1.png" alt=""></div>
									<div class="popular_category_text">Smartphones & Tablets</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="equal-width faded-blue-background">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="img/popular_2.png" alt=""></div>
									<div class="popular_category_text">Computers & Laptops</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="equal-width faded-red-background">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="img/popular_3.png" alt=""></div>
									<div class="popular_category_text">Gadgets</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="equal-width faded-blue-background">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="img/popular_4.png" alt=""></div>
									<div class="popular_category_text">Video Games & Consoles</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="equal-width faded-red-background">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="img/popular_5.png" alt=""></div>
									<div class="popular_category_text">Accessories</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Brands -->

		<div class="brands" id="brandclose">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="brands_slider_container">
						
							<!-- Brands Slider -->

							<div class="owl-carousel owl-theme brands_slider">
							
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_1.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_2.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_3.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_4.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_5.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_6.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_7.jpg" alt=""></div></div>
								<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="img/brands_8.jpg" alt=""></div></div>

							</div>
						
							<!-- Brands Slider Navigation -->
							<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

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
