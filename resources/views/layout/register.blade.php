	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<title>Creation-compte</title>

			<!-- Google font -->
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- Bootstrap CSS -->
	<link type="text/css" rel="stylesheet" href="{{ asset('client_front/css/bootstrap.min.css') }}"/>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('client_front/css/slick.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('client_front/css/slick-theme.css') }}"/>

	<!-- Nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('client_front/css/nouislider.min.css') }}"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('client_front/css/font-awesome.min.css') }}">

	<!-- Custom stylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('client_front/css/style.css') }}"/>

			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->

		</head>
		<body>
			<!-- HEADER -->
			<header>
				<!-- TOP HEADER -->
				<div id="top-header">
					<div class="container">
						<ul class="header-links pull-left">
							<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
							<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
						</ul>
						<ul class="header-links pull-right">

						</ul>
					</div>
				</div>
				<!-- /TOP HEADER -->

				<!-- MAIN HEADER -->
				<div id="header">
					<!-- container -->
					<div class="container">
						<!-- row -->
						<div class="row">
							<!-- LOGO -->
							<div class="col-md-3">
								<div class="header-logo">
									<a href="#" class="logo">
										<img src="./img/logo.png" alt="">
									</a>
								</div>
							</div>
							<!-- /LOGO -->

							<!-- SEARCH BAR -->
							<div class="col-md-6">
								<div class="header-search">
									<form>
									</form>
								</div>
							</div>
							<!-- /SEARCH BAR -->

							<!-- ACCOUNT -->
							<div class="col-md-3 clearfix">
								<div class="header-ctn">
									<!-- Wishlist -->
									<div>
										<a href="#">
											
										</a>
									</div>
									<!-- /Wishlist -->

									<!-- Cart -->
									<div class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											
										</a>
										<div class="cart-dropdown">
											<div class="cart-list">
												<div class="product-widget">
													<div class="product-img">
														<img src="./img/product01.png" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-name"><a href="#">product name goes here</a></h3>
														<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
													</div>
													<button class="delete"><i class="fa fa-close"></i></button>
												</div>

												<div class="product-widget">
													<div class="product-img">
														<img src="./img/product02.png" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-name"><a href="#">product name goes here</a></h3>
														<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
													</div>
													<button class="delete"><i class="fa fa-close"></i></button>
												</div>
											</div>
											<div class="cart-summary">
												<small>3 Item(s) selected</small>
												<h5>SUBTOTAL: $2940.00</h5>
											</div>
											<div class="cart-btns">
												<a href="#">View Cart</a>
												<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
											</div>
										</div>
									</div>
									<!-- /Cart -->

									<!-- Menu Toogle -->
									<div class="menu-toggle">
										<a href="#">
											<i class="fa fa-bars"></i>
											<span>Menu</span>
										</a>
									</div>
									<!-- /Menu Toogle -->
								</div>
							</div>
							<!-- /ACCOUNT -->
						</div>
						<!-- row -->
					</div>
					<!-- container -->
				</div>
				<!-- /MAIN HEADER -->
			</header>
			<!-- /HEADER -->

			<!-- NAVIGATION -->
			<nav id="navigation">
				<!-- container -->
				<div class="container">
					<!-- responsive-nav -->
					<div id="responsive-nav">
						<!-- NAV -->
						<ul class="main-nav nav navbar-nav">
							
						</ul>
						<!-- /NAV -->
					</div>
					<!-- /responsive-nav -->
				</div>
				<!-- /container -->
			</nav>
			<!-- /NAVIGATION -->

			<!-- BREADCRUMB -->
			<div id="breadcrumb" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<h3 class="breadcrumb-header">Creation de compte d'utilisateur</h3>
							<ul class="breadcrumb-tree">
								
							</ul>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /BREADCRUMB -->

			<!-- SECTION -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<div class="col-md-7">
							<!-- Billing Details -->
							<div class="billing-details">
								<div class="section-title">
									<h3 class="title">Enregistrement d'un Client</h3>

								</div>
								<form action="{{route('client.create')}}" method="post">
									@csrf
										<div class="form-group">
											<span>NOM</span>
											<input class="input" type="text" name="name" placeholder="mettez votre nom" required>
										</div>
										<div class="form-group">
										<span>Phone</span>
											<input class="input" type="text" name="tel" placeholder="mettez votre numero telephone" required>
										</div>
										<div class="form-group">
										<span>Email</span>
											<input class="input" type="email" name="email" placeholder="mettez votre Email">
										</div>
										<div class="form-group">
										<span>Adresse</span>
											<input class="input" type="text" name="addresse" placeholder="mettez votre Addresse">
										</div>
										<div class="form-group">
										<span>Mot de passe</span>
											<input class="input" type="password" name="password" placeholder="mettez votre Mot de passe" required>
										</div>
										<div class="form-group">
										<span>Confirmation mot de passes</span>
											<input class="input" type="password" name="confirmation_password" placeholder="Confirmation votre mot de passe" required>
										</div>
										<div class="form-group"> 
											<input type="submit" value="Envoyer" class="btn btn-primary" required>
										</div>
							
								</form>
								
							<!-- /Billing Details -->

							<!-- Shiping Details -->
							
							<!-- /Shiping Details -->

							<!-- Order notes -->
							
							<!-- /Order notes -->
						</div>

						<!-- Order Details -->
						<div class="col-md-5 order-details">
							<div class="section-title text-center">
								<h3 class="title"></h3>
							</div>
							<div class="order-summary">
								<div class="order-col">
								
							</div>
							<div class="input-checkbox">
							
							</div>
						</div>
						<!-- /Order Details -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION -->

			<!-- NEWSLETTER -->
			<div id="newsletter" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="newsletter">
								<p>Sign Up for the <strong>NEWSLETTER</strong></p>
								<form>
									<input class="input" type="email" placeholder="Enter Your Email">
									<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
								</form>
								<ul class="newsletter-follow">
									<li>
										<a href="#"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /NEWSLETTER -->

			<!-- FOOTER -->
			<footer id="footer">
				<!-- top footer -->
				<div class="section">
					<!-- container -->
					<div class="container">
						<!-- row -->
						<div class="row">
							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">About Us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
									<ul class="footer-links">
										<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
										<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Categories</h3>
									<ul class="footer-links">
										<li><a href="#">Hot deals</a></li>
										<li><a href="#">Laptops</a></li>
										<li><a href="#">Smartphones</a></li>
										<li><a href="#">Cameras</a></li>
										<li><a href="#">Accessories</a></li>
									</ul>
								</div>
							</div>

							<div class="clearfix visible-xs"></div>

							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Information</h3>
									<ul class="footer-links">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Orders and Returns</a></li>
										<li><a href="#">Terms & Conditions</a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-3 col-xs-6">
								<div class="footer">
									<h3 class="footer-title">Service</h3>
									<ul class="footer-links">
										<li><a href="#">My Account</a></li>
										<li><a href="#">View Cart</a></li>
										<li><a href="#">Wishlist</a></li>
										<li><a href="#">Track My Order</a></li>
										<li><a href="#">Help</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</div>
				<!-- /top footer -->

				<!-- bottom footer -->
				<div id="bottom-footer" class="section">
					<div class="container">
						<!-- row -->
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="footer-payments">
									<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
									<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
									<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
									<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
									<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
									<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
								</ul>
								<span class="copyright">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</span>
							</div>
						</div>
							<!-- /row -->
					</div>
					<!-- /container -->
				</div>
				<!-- /bottom footer -->
			</footer>
			<!-- /FOOTER -->

			<!-- jQuery Plugins -->
					<!-- jQuery Plugins -->
					<script src="{{ asset('client_front/js/jquery.min.js')}}"></script>
			<script src="{{ asset('client_front/js/bootstrap.min.js')}}"></script>
			<script src="{{ asset('client_front/js/slick.min.js')}}"></script>
			<script src="{{ asset('client_front/js/nouislider.min.js')}}"></script>
			<script src="{{ asset('client_front/js/jquery.zoom.min.js')}}"></script>
			<script src="{{ asset('client_front/js/main.js')}}"></script>

		</body>
	</html>
