<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sport - Responsive Mobile Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">

	<link rel="stylesheet" href="{{ asset('themes/css/materialize.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/css/owl.transitions.css') }}">		
	<link rel="stylesheet" href="{{ asset('themes/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/css/fakeLoader.css') }}">
	<link rel="stylesheet" href="{{ asset('themes/css/style.css') }}">
	
	<link rel="shortcut icon" href="{{ asset('themes/img/favicon.png') }}">

</head>
<body>

	<!-- navbar top -->
	<div class="navbar-top">
		<div class="side-nav-panel-left">
			<a href="#" data-activates="slide-out-left" class="side-nav-left"><i class="fa fa-bars"></i></a>
		</div>
		<!-- site brand	 -->
		<div class="site-brand" style="margin-top: 15px;">
			<a href="{{ url('/') }}"><img src="{{ asset('themes/img/log.png') }}" width="120px" alt=""></a>
		</div>
		<!-- end site brand	 -->
		<div class="side-nav-panel-right">
			<a href="" class="side-nav-right-icon"><span><i class="fa fa-calendar"></i></span></a>
			<a href="#" data-activates="slide-out-right" class="side-nav-right"><i class="fa fa-user"></i></a>
		</div>
	</div>
	<!-- end navbar top -->

	<!-- side nav left-->
	<div class="side-nav-panel-left">
		<ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
			<li class="li-top">
				<a href="index.html"><i class="fa fa-home"></i>Home</a>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-shopping-cart"></i>Shop <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="shop.html">Shop</a></li>
						<li><a href="shop-single.html">Shop Single</a></li>
						<li><a href="checkout.html">Checkout</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-bold"></i>Blog <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>
				</div>
			</li>
			<li><a href="standings.html"><i class="fa fa-calendar"></i>Standings</a></li>
			<li><a href="error404.html"><i class="fa fa-hourglass-half"></i>404</a></li>
			<li><a href="team.html"><i class="fa fa-users"></i>Team</a></li>
			<li><a href="testimonial.html"><i class="fa fa-support"></i>Testimonial</a></li>
			<li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
			<li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>
		</ul>
	</div>
	<!-- end side nav left-->

	<!-- side nav right-->
	<div class="side-nav-panel-right">
		<ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
			<li class="profil">
				<img src="img/profile.jpg" alt="">
				<h2>John Doe</h2>
			</li>
			<li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
			<li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>
		</ul>
	</div>
	<!-- end side nav right-->

	
	<!-- login -->
	<div class="pages section">
		@yield('content')
	</div>
	<!-- end login -->
	
	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6>SPORT</h6>
				<p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
			</div>
			<div class="social-media">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-google"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
			</div>
			<div class="copyright">
				<span>© 2016 All Right Reserved</span>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- scripts -->
	<script src="{{ asset('themes/js/jquery.min.js') }}"></script>
	<script src="{{ asset('themes/js/materialize.min.js') }}"></script>
	<script src="{{ asset('themes/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('themes/js/fakeLoader.min.js') }}"></script>
	<script src="{{ asset('themes/js/main.js') }}"></script>

</body>
</html>