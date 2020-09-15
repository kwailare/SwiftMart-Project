<?php

$con = new PDO("mysql:host=localhost;dbname=search_bar",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["srch"];
	$sth = $con->prepare("SELECT * FROM `laptops` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{

?>


<!DOCTYPE html>
<html class="no-js">

<head>
	<title>Homepage | SwiftMart</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fav icon -->
	<link rel="shortcut icon" href="img/favicon_io/favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">


	<!-- Magnific Popup -->
	<link href="css/magnific-popup.css" rel="stylesheet">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skin-lblue.css">

	<link rel="stylesheet" href="css/ecommerce.css">

	<!-- Owl carousel -->
	<link href="css/owl.carousel.css" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/revolutionslider_settings.css" media="screen" />

	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body class="style-14">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Start Loading -->
<section class="loading-overlay">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>
<!-- End Loading  -->

<!-- start header -->
<header>
	<!-- Top bar starts -->
	<div class="top-bar">
		<div class="container">

			<!-- Contact starts -->
			<div class="tb-contact pull-left">
				<!-- Email -->
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:info@swiftmart.com">info@swiftmart.com</a>
				&nbsp;&nbsp;
				<!-- Phone -->
				<i class="fa fa-phone color"></i> &nbsp; +2347017305233
			</div>
			<!-- Contact ends -->



			<!-- Social media starts -->
			<div class="tb-social pull-right">
				<div class="brand-bg text-right">
					<!-- Brand Icons -->
					<a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
					<a href="#" class="instagram"><i class="fa fa-instagram square-2 rounded-1"></i></a>
				</div>
			</div>
			<!-- Social media ends -->

			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Top bar ends -->

	<!-- Header One Starts -->
	<div class="header-1">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<!-- Logo section -->
					<div class="logo">
						<h1><a href="index.php"><i class="fa fa-shopping-cart color"></i> SwiftMart</a><span style="font-weight: bold; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">  BETA</span></h4><p style="font-size: small; font-style: italic; margin-left: 40px;margin-top: -20px; color:deepskyblue;">The African Amazon</p></h1>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form action="search.php" method="post">
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" name="srch" class="form-control" placeholder="Search...">
										<span class="input-group-btn">
										<button class="btn btn-color" type="submit" name="submit"><i class="fa fa-search color"></i></button>	
										</span>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>

		<!-- Navigation starts -->

		<div class="navi">
			<div class="container">
				<div class="navy">
					<ul>
						<!-- Main menu -->
						<li><a href="index.php">Home</a></li>
						<li><a href="laptops.html">Laptops</a></li>
						<li><a href="smartphones.html">Smartphones</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="accessories.html">Accessories</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

</header>
<!-- end header -->

<div class="list-content">
        
<!-- Start Our Clients -->

<section id="Clients" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="Last-items-shop col-md-3 col-sm-6">

					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Search results</span></h3>
					</div>
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="img/small/53.jpg" alt=""></a>
                                <h4><a href="#"><?php echo $row->Name; ?></a></h4>
                                <h6><?php echo $row->Model; ?></h6>
								<span class="sale-date">&#8358;<?php echo $row->Price; ?></span>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
</section>

	<!-- End Our Clients  -->

<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
</div>

	<!-- End Our Clients  -->



<!-- start footer area -->
<footer class="footer-area-content">

	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3">
							<a href="index.html"> <h1><i class="fa fa-shopping-cart color"></i> SwiftMart</h1></a>
							<div class="footer-description" style="font-style: italic;">...The Amazon Of Africa</div>
							<div class="footer-address"><i class="fa fa-map-marker color"></i> Nigeria<br> <i class="fa fa-phone color"></i> Phone: +2347017305233<br> <i class="fa fa-envelope color"></i> Email: <a href="mailto:info@swiftmart.com">info@swiftmart.com</a><br>
								<a target="_blank" href="http://swiftmart.com/"><b>www.swiftmart.com</b></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Customer Care</h3>
							<ul class="column">
								<li><a href="#">Terms & Condition</a></li>
								<li><a href="contact.html">Contact Us</a></li></ul>
							<div class="clear"></div>
						</div>
						
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Shop Information</h3>
							<ul class="column">
								<li><a href="about.html">About Company</a></li>
								
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3">
							
							<div class="clear"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="footer-bottom footer-wrapper style-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-bottom-navigation">
						<div class="cell-view">
							<div class="footer-links">
								<a href="#srch">Search</a>
								<a href="#">Terms & Condition</a>
								<a href="about.html">About Us</a>
								<a href="contact.html">Contact Us</a>
							</div>
							<div style="text-align: center;" class="copyright">Created by <h5>Wailcorp Dev. All right reserved</h5> </div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>



</footer>
<!-- footer area end -->


<!-- All script -->
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="js/jquery.scrollUp.js"></script>
<script src="js/menu.js"></script>
<!-- new collection section script -->
<script src="js/swiper/idangerous.swiper.min.js"></script>
<script src="js/swiper/swiper.custom.js"></script>

<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.countdown.min.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>



<script type="text/javascript">

	/*-----------------------------------------------------------------------------------*/
	/* Product Carousel
	 /*-----------------------------------------------------------------------------------*/
	if (jQuery().owlCarousel) {
		var productCarousel = $("#product-carousel");
		productCarousel.owlCarousel({
			loop: true,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				900: {
					items: 3
				},
				1100: {
					items: 4
				}
			}
		});

		// Custom Navigation Events
		$(".product-control-nav .next").on("click", function() {
			productCarousel.trigger('next.owl.carousel');
		});

		$(".product-control-nav .prev").on("click", function() {
			productCarousel.trigger('prev.owl.carousel');
		});
	}

	/* Main Slider */
	$('.tp-banner0').show().revolution({
		dottedOverlay: "none",
		delay: 5000,
		startWithSlide: 0,
		startwidth: 869,
		startheight: 520,
		hideThumbs: 10,
		hideTimerBar: "on",
		thumbWidth: 50,
		thumbHeight: 50,
		thumbAmount: 4,
		navigationType: "bullet",
		navigationArrows: "solo",
		navigationStyle: "round",
		touchenabled: "on",
		onHoverStop: "on",
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
		parallax: "mouse",
		parallaxBgFreeze: "on",
		parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
		keyboardNavigation: "off",
		navigationHAlign: "right",
		navigationVAlign: "bottom",
		navigationHOffset: 30,
		navigationVOffset: 30,
		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 50,
		soloArrowLeftVOffset: 8,
		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 50,
		soloArrowRightVOffset: 8,
		shadow: 0,
		fullWidth: "on",
		fullScreen: "off",
		spinner: "spinner4",
		stopLoop: "on",
		stopAfterLoops: -1,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		forceFullWidth: "off",
		hideThumbsOnMobile: "off",
		hideNavDelayOnMobile: 1500,
		hideBulletsOnMobile: "off",
		hideArrowsOnMobile: "off",
		hideThumbsUnderResolution: 0,
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 500,
		hideAllCaptionAtLilmit: 500,
		videoJsPath: "rs-plugin/videojs/",
		fullScreenOffsetContainer: ""
	});



</script>



</body>


</html>


