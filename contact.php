<!DOCTYPE html>
<html class="no-js">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact-us | SwiftMart</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fav icon -->
	<link rel="shortcut icon" href="img/favicon_io/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/skin-lblue.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/setting.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>


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
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">info@swiftmart.com</a>
				&nbsp;&nbsp;
				<!-- Phone -->
				<i class="fa fa-phone color"></i> &nbsp; +2347017305233
			</div>
			<!-- Contact ends -->

			<!-- Social media starts -->
			<div class="tb-social pull-right">
				<div class="brand-bg text-right">
					<!-- Brand Icons -->
					<a href="https://www.facebook.com/Swiftmart-ng-111011497398438" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
					<a href="https://www.instagram.com/swift_mart_ng/" class="instagram"><i class="fa fa-instagram square-2 rounded-1"></i></a>
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
						<h1><a href="index.php"><i class="fa fa-shopping-cart color"></i> SwiftMart<p style="font-size: small; font-style: italic; margin-left: 40px;margin-top: -20px; color:deepskyblue;">The African Amazon</p></a></h1>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form>
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-color" id="srch" type="button"><i class="fa fa-search color"></i></button>
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
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

</header>
<!-- end header -->

<!-- start main content -->
<main class="main-container">
<!-- contact content -->


	<!-- Start Contact Us -->

	<div id="Contact" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="col-md-8">
					<hr>
				<?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
				?>
						
					<div class="row">
						
						<div class="Contact-Form">
							<form class="leave-comment contact-form" method="post" action="process.php" id="cform" autocomplete="on">
								<div class="Contact-us">
									<div class="form-input col-md-4">
										<input type="text" name="Uname" placeholder="Your Name" required>
									</div>
									<div class="form-input col-md-4">
										<input type="email" name="E_mail" placeholder="Email" required>
									</div>
									<div class="form-input col-md-4">
										<input type="text" name="Phone" placeholder="Phone">
									</div>
									<div class="form-input col-md-12">
										<textarea class="txt-box textArea" name="Mssg" cols="40" rows="7" id="messageTxt" placeholder="Message" spellcheck="true" required></textarea>
									</div>
									<div class="form-submit col-md-12">
									<button class="btn btn-info" name="btn-send"> Send Message</button>
										<!-- <input type="submit" name="btn_send" class="btn btn-custom-6" value="Send Message"> -->
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">

					<div class="Contact-Info">
						<h4>Contact Details</h4>
						<div class="tex-contact">
							<p>Feel free to contact Us for Support!</p>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Phone :</p>
							<ul>
								<li>
									<i class="fa fa-phone"></i>
									<span>+2347017305233</span>
								</li>
								
							</ul>
						</div>
						<div class="Block-Contact col-md-6">
							<p>Email :</p>
							<ul>
								<li>
									<i class="fa fa-envelope"></i>
									<span>info@swiftmart.com</span>
								</li>
							</ul>
						</div>
						<div class="Block-Contact col-md-12">
							<p>Address :</p>
							<ul>
								<li>
									<i class="fa fa-map-marker"></i>
									<span>Nigeria.</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Us -->
<!-- end contact content -->
	
</main>
<!-- end main content -->
<div class="clearfix"></div>
</br>
<hr/>
</br>
<!-- start footer area -->
<footer class="footer-area-content">

	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3">
							<a href="index.php"> <h1><i class="fa fa-shopping-cart color"></i> SwiftMart</h1></a>
							<div class="footer-description" style="font-style: italic;">...The Amazon Of Africa</div>
							<div class="footer-address"><i class="fa fa-map-marker color"></i> Nigeria<br> <i class="fa fa-phone color"></i> Phone: +2347017305233<br> <i class="fa fa-envelope color"></i> Email: <a href="mailto:info@swiftmart.com">info@swiftmart.com</a><br>
								<a target="_blank" href="http://swiftmart.com/"><b>www.swiftmart.com</b></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Customer Care</h3>
							<ul class="column">
								<li><a href="Terms and conditions.html">Terms & Condition</a></li>
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
								<a href="Terms and conditions.html">Terms & Condition</a>
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




<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<!-- Scroll up js
============================================ -->
<script src="js/jquery.scrollUp.js"></script>
<script src="js/menu.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>