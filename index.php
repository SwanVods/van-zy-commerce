<?php
  //koneksi
  $connect = new mysqli('localhost', 'root', '', 'olshop');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Van.zy Fashions</title>
  <meta charset="utf-8">
  <meta name="description" content="e-commerce project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">

  
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="#"><div>VAN<br><span>.zy</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">home</a></li>
					<li><a href="#">woman</a></li>
					<li><a href="#">man</a></li>
					<li><a href="#">lookbook</a></li>
					<li><a href="#">blog</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			<!-- Language -->
      <div class="info_languages has_children">
        <div class="language_flag"><img src="images/flag_6.svg" alt="https://www.flaticon.com/authors/freepik"></div>
        <div class="dropdown_text">IND</div>
        <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
        
        <!-- Language Dropdown Menu -->
         <ul>
           <li><a href="#">
             <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
            <div class="dropdown_text">ENG</div>
           </a></li>
         </ul>

      </div>

      <!-- Currency -->
      <div class="info_currencies has_children">
        <div class="dropdown_text">IDR</div>
        <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

        <!-- Currencies Dropdown Menu -->
         <ul>
           <li><a href="#"><div class="dropdown_text">USD</div></a></li>

      </div>

		</div>
		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">home</a></li>
				<li class="menu_mm"><a href="#">woman</a></li>
				<li class="menu_mm"><a href="#">man</a></li>
				<li class="menu_mm"><a href="#">lookbook</a></li>
				<li class="menu_mm"><a href="blog.html">blog</a></li>
				<li class="menu_mm"><a href="contact.html">contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_6.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">IND</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">ENG</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">IDR</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">USD</div></a></li>

				</div>

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#">
			  <div>VAN<br><span>.zy</span></div>
			</a>
    </div>
    
    <!-- Search bar -->
    <div class="search">
      <form action="#" class="search_form" id="sidebar_search_form">
        <input type="text" class="search_input" placeholder="Search" required="required">
        <button class="search_button">
          <i class="fa fa-search" aria-hidden="true">
          </i>
        </button>
      </form>
    </div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="index.php">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">woman<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">man<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</nav>

    <!-- Login menu -->
    <div class="login_menu">
      <a href="#" class="signup">Sign Up</a>
      <a href="#" class="login">Already a member?</a>
    </div>
	
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide1 -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_0.png)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button rounded trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide2 -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/newsletter.jpg)"></div>
					<div class="home_content_container_2">
						<div class="home_content_2 d-flex flex-column align-items-center">
							<div class="home_title_2">Culture that Feels</div>
							<div class="button button_2 home_button rounded trans_200"><a href="categories.html">See Our Products</a></div>
						</div>
					</div>
				</div>
			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

		</div>
	</div>


	<!-- Products -->

	<div class="products">
    <div class="goods-title">
      <h3 class="goods-bg">TOP Products</h3>
      <div class="goods-line"></div>
    </div>
		<div class="section_container" style="margin-top: 50px;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
              
            <?php $ambil = koneksi->query("SELECT goods_name, goods_prc, goods_pic FROM goods");?>
            <?php while($pecah = $ambil->fetch_assoc() {)?>

							<!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_1.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html"><?php echo $pecah['goods_name']?></a></div>
										<div class="product_price">Rp. 598.000,-</div>
										<div class="product_button rounded ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
              </div>
              
            <?php }?>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Vanzy cream wedges</a></div>
										<div class="product_price">Rp. 365.900,-</div>
										<div class="product_button rounded ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_3.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Vanzy Top Crop</a></div>
										<div class="product_price">Rp. 549.900,-</div>
										<div class="product_button rounded ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_4.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Vanzy Handbag</a></div>
										<div class="product_price">Rp. 239.700,-</div>
										<div class="product_button rounded ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_5.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Vanzy Sneakers</a></div>
										<div class="product_price">Rp. 270.500,-</div>
										<div class="product_button rounded ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_6.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Vanzy Heldbag</a></div>
										<div class="product_price">Rp. 220.000,-</div>
										<div class="product_button rounded ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>
						</div>
					</div>
        </div>
        <div class="all_products_button rounded ml-auto mr-auto trans_200">
          <a href="product.html">View all Products</a>
        </div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="section_container">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_about">
								<!-- Logo -->
								<div class="footer_logo">
									<a href="#"><div>VAN<br><span>.zy</span></div></a>
								</div>
								<div class="footer_about_text">
									<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
								</div>
								<div class="cards">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#"><img src="images/card_1.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_2.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_3.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_4.jpg" alt=""></a></li>
										<li><a href="#"><img src="images/card_5.jpg" alt=""></a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Questions -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_questions">
								<div class="footer_title">questions</div>
								<div class="footer_list">
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Track Orders</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Terms of Use</a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Blog -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_blog">
								<div class="footer_title">blog</div>
								<div class="footer_blog_container">

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.html"><img src="images/footer_blog_1.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.html">what shoes to wear</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.html">Read More</a></div>
										</div>
									</div>

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.html"><img src="images/footer_blog_2.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.html">Read More</a></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Contact -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_contact">
								<div class="footer_title">contact</div>
								<div class="footer_contact_list">
									<ul>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Vanzy Store Indonesia</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>Jl.Supratman 1409 Surabaya</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+62 882 0383 2314</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>ariefg@myemail.com</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="footer_social">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
								<!-- Instagram -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="footer_social_title">instagram</div>
									</div>
								</a>
								<!-- Google + -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
										<div class="footer_social_title">google +</div>
									</div>
								</a>
								<!-- Pinterest -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
										<div class="footer_social_title">pinterest</div>
									</div>
								</a>
								<!-- Facebook -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="footer_social_title">facebook</div>
									</div>
								</a>
								<!-- Twitter -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="footer_social_title">twitter</div>
									</div>
								</a>
								<!-- YouTube -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
										<div class="footer_social_title">youtube</div>
									</div>
								</a>
								<!-- Tumblr -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
										<div class="footer_social_title">tumblr</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Credits -->
		<div class="credits">
		  <div class="section_container">
		    <div class="container">
		      <div class="row">
		        <div class="col">
		          <div class="credits_content d-flex flex-row align-items-center justify-content-end">
		            <div class="credits_text">
		              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		              Copyright &copy;<script>
		                document.write(new Date().getFullYear());
		              </script> All rights reserved | This website is made by Arief G with <a href="https://colorlib.com" target="_blank">Colorlib</a>
		              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/custom.js"></script>
</body>
</html>