<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Fine Refiners Pvt. Ltd.</title>

	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo_bg.png" type="image/x-icon" />
	<link rel="icon" href="img/logo_bg.png" type="image/x-icon" />
	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<style>
		.welcome-section .content-column .quality-box .quality-inner {
			padding-left: 0px;
		}


		/* General Page Title Section */
		.page-title {
			position: relative;
			background-image: url('images/background/9.jpg');
			background-size: cover;
			background-position: center;
			height: 80vh;
		}

		/* Overlay for the Page Title */
		.page-title .overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
			/* Adjust the transparency as needed */
			z-index: 1;
		}

		/* Content inside the Page Title */
		.page-title .auto-container {
			position: relative;
			z-index: 2;
			/* Ensure content is above the overlay */
			text-align: center;
			color: white;
		}

		/* Breadcrumb Styling */
		.bread-crumb li {
			display: inline;
			color: white;
		}

		.bread-crumb li a {
			color: white;
			text-decoration: none;
		}

		.bread-crumb li::after {
			content: " / ";
		}

		.bread-crumb li:last-child::after {
			content: "";
		}

		/* Main Header Styling */
		.main-header {
			position: absolute;
			width: 100%;
			z-index: 1000;
		}

		.main-header .header-top,
		.main-header .header-upper,
		.main-header .header-lower {
			background-color: transparent;
			/* Transparent header before sticky */
			box-shadow: none;
		}

		.main-header .sticky-header {
			background-color: rgba(0, 0, 0, 0.8);
			/* Darker background on sticky */
			transition: background-color 0.3s ease;
		}

		.main-header .navbar-collapse ul li a {
			color: white;
			/* Ensure visibility of navigation links */
		}

		/* Logo Styling */
		.main-header .logo img {
			filter: brightness(100%);
		}

		/* Info Box Text and Icon Color */
		.header-upper .info-box ul li,
		.header-upper .info-box ul li strong,
		.header-upper .icon-box span {
			color: white;
		}

		.header-top .text {
			color: white;
		}

		/* Dropdown Menu Styling */
		.dropdown-menu {
			background-color: rgba(0, 0, 0, 0.8);
			color: white;
			display: none;
			position: absolute;
			min-width: 160px;
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-menu li a {
			padding: 12px 16px;
			color: white;
			text-decoration: none;
			display: block;
		}

		.dropdown-menu li a:hover {
			background-color: #575757;
		}

		.dropdown:hover .dropdown-menu {
			display: block;
		}

		.dropdown:hover .rogg i {
			transform: rotate(180deg);
			transition: transform 0.3s ease;
		}

		/* Sticky Header Navigation */
		.main-header .sticky-header .main-menu .navigation>li>a {
			padding: 23px 0;
			color: white;
			backdrop-filter: blur(5px);
			/* For a frosted glass effect */
			-webkit-backdrop-filter: blur(5px);
		}

		/* Dropdown Menu in Sticky Header */
		.main-header .main-menu .navigation>li>ul {
			backdrop-filter: blur(5px);
			/* Adjust the blur effect as necessary */
			-webkit-backdrop-filter: blur(5px);
		}





		/* Updated Gradient Background */
		.content-column {
			padding: 30px;
			background: linear-gradient(135deg, #4CAF50 0%, #2C6B40 100%);
			border-radius: 12px;
			box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
			color: #fff;
			overflow: hidden;
			position: relative;
		}


		.inner-column {
			position: relative;
			z-index: 2;
		}

		/* Updated Text Colors */
		.sec-title-three .title {
			font-size: 28px;
			font-weight: 700;
			color: #ffffff;
			margin-bottom: 10px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
			/* Adjusted shadow for better readability */
		}

		.sec-title-three h4 {
			font-size: 22px;
			color: #e0e0e0;
			margin-bottom: 15px;
		}

		.sec-title-three .text {
			font-size: 16px;
			color: #d1d1d1;
		}

		/* Updated Quality Box Styles */
		.quality-box {
			background-color: #ffffff;
			border-radius: 8px;
			padding: 20px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			position: relative;
			animation: fadeInUp 1s ease-out;
		}

		.quality-box::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 5px;
			background-color: #4CAF50;
			/* Updated to match the new gradient */
			border-radius: 8px 8px 0 0;
		}

		.quality-box .quality-inner {
			display: flex;
			align-items: center;
			gap: 20px;
			flex-direction: row-reverse;
		}

		.quality-box .quality-inner .icon {
			background-color: #2C6B40;
			/* Updated to match the new gradient */
			padding: 7px;
			border-radius: 50%;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			animation: bounceIn 1s ease-out;
		}

		.quality-box .quality-inner .icon i {
			color: #ffffff;
		}

		.quality-box .quality-inner .text {
			font-size: 16px;
			color: #333;
			line-height: 1.5;
		}

		/* Animations */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(20px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes bounceIn {
			from {
				opacity: 0;
				transform: scale(0.5);
			}

			60% {
				opacity: 1;
				transform: scale(1.1);
			}

			100% {
				transform: scale(1);
			}
		}

		.approach-section::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 63%;
			height: 100%;
			background: #0ea23e;
			mix-blend-mode: normal;
			opacity: .8;
			clip-path: polygon(0 0, 72% 0, 100% 100%, 0% 100%);
		}
	</style>
</head>

<body>
	<div class="cursor"></div>

	<!-- PageWrapper -->
	<div class="page-wrapper">
		<?php include "nav.php"; ?>



		<!-- Page Title -->
		<!-- Page Title -->
		<section class="page-title" style="position: relative; background-image: url(images/background/9.jpg); background-size: cover; background-position: 0% -40%; height: 55vh;">
			<!-- Overlay -->
			<div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

			<div class="auto-container" style="position: relative; z-index: 1; text-align: center; color: white; margin-top: 8%;">
				<ul class="bread-crumb clearfix">
					<li><a href="index.php" style="color: white;">Home</a></li>
					<li>About Us</li>
				</ul>
				<h2>About Us</h2>
			</div>
		</section>

		<!--End Page Title-->

		<br>
		<br>
		<br>
		<br>
		<br>


		<!-- Welcome Section / Style Two -->
		<section class="welcome-section style-two">
			<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
			<div class="pattern-layer-two" style="background-image:url(images/icons/shape-3.png)"></div>
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="img/ne1.jpg" alt="" style=" width: 570px; height: 570px; " />
							</div>
							<!-- <div class="color-layer"></div> -->
							<!-- <div class="big-text">about</div> -->
						</div>
					</div>
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title Three -->
							<div class="sec-title-three">
								<div class="title">
									<span>Welcome to</span> Fine Refiners PVT. LTD.
								</div>
								<h4>28+ Years of Experience in Oil Refinery</h4>
								<div class="text">
									Fine Refiners Pvt. Ltd. is an ISO 9001 & 14001 certified company with licenses from CPCB & GPCB Authorization. We employ the latest technology for recycling used & waste oils, adhering to modern standards to ensure environmental cleanliness. Managed by Mr. Amin R. Vasaya, who has over a decade of experience in oil recycling, our company is dedicated to excellence in every aspect of our operations.
								</div>
							</div>

							<!-- Quality Box -->
							<div class="quality-box">
								<div class="quality-inner">
									<!-- <i class="fa-solid fa-circle-check "></i> -->

									<div class="text">

										We adhere strictly to ASTM/BIS standards for testing recycled base oil and fuel oil. Our tests ensure that the material conforms to Schedule 5 or 6 before processing, even though the responsibility lies with the owners. Our excellent laboratory facilities guarantee thorough testing of our products, ensuring top-notch quality before they reach the market.
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- End Welcome Section -->

		<!-- Counter Section -->
		<section class="counter-section style-two">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title alternate centered">
					<div class="title">Achivement</div>
					<h2>Our Achivements</h2>
				</div>
				<div class="row clearfix">

					<!-- Counter Column -->
					<div class="counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="icon-box">
								<span class="icon flaticon-factory"></span>
							</div>
							<h3><span class="odometer" data-count="150"></span>+</h3>
							<div class="counter-text">Employees</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="icon-box">
								<span class="icon flaticon-fluid-mechanics"></span>
							</div>
							<h3><span class="odometer" data-count="28"></span>+</h3>
							<div class="counter-text">Years Experience</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="icon-box">
								<span class="icon flaticon-group"></span>
							</div>
							<h3><span class="odometer" data-count="5000"></span>+</h3>
							<div class="counter-text">Loyal Customers</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Counter Section -->


		<!-- Approach Section -->
		<section class="approach-section" style="background-image: url('img/vision-mission.webp'); background-repeat: no-repeat;     background-size: cover;
    background-position: center;">
			<div class="auto-container">
				<!-- Sec Title Three -->


				<br>
				<br>
				<div class="row">
					<div class="col-md-6">
						<h3 style="color:white;">
							Our Vision
						</h3>
						<hr class="mt-4" style="border: 1px solid white; width: 100px;">
						<br>
						<p style="color:white;">We aspire to become the ultimate alliance that delivers unparalleled convenience to individuals of all environments, both present and future, thus earning their utmost respect and admiration.</p>

						<br>
						<h3 style="color:white;">
							Our Mission
						</h3>
						<hr class="mt-4" style="border: 1px solid white; width: 100px;">
						<br>
						<p style="color:white;">Our unwavering commitment to surpass the expectations of our cherished customers through cutting-edge solutions and exceptional products and services is a legacy cherished for generations to come.</p>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-5" style=" display: flex;  flex-direction: column; align-items: center; justify-content: center; 
  					  text-align: center;">
						<h3 style="color:white;">
							Our Vision
						</h3>
						<hr class="mt-4" style="border: 1px solid white; width: 100px;">
						<br>
						<img src="img/innovation.svg" style="height: 7vh;" alt="">
						<h5 style="color: wh;">Integrity</h5>
						<br>
					</div>

				</div>
			</div>
		</section>
		<!-- End Approach Section -->

		<!-- Testimonial Section Three -->
		<section class="testimonial-section-three" style="background-image:url(images/background/map.png)">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title alternate centered">
					<div class="title">Our Testimonial</div>
					<h2>Happy Client Says <br> About Us</h2>
				</div>
				<div class="three-item-carousel-two owl-carousel owl-theme">

					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="author-box">
								<div class="author-inner">
									<div class="author-image">
										<img src="images/resource/author-6.jpg" alt="" />
									</div>
									<strong>Jeffery Marshall</strong>
									<div class="designation">Founder & Ceo</div>
								</div>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Risus facilisis.</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="author-box">
								<div class="author-inner">
									<div class="author-image">
										<img src="images/resource/author-6.jpg" alt="" />
									</div>
									<strong>Jeffery Marshall</strong>
									<div class="designation">Founder & Ceo</div>
								</div>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Risus facilisis.</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="author-box">
								<div class="author-inner">
									<div class="author-image">
										<img src="images/resource/author-6.jpg" alt="" />
									</div>
									<strong>Jeffery Marshall</strong>
									<div class="designation">Founder & Ceo</div>
								</div>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Risus facilisis.</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="author-box">
								<div class="author-inner">
									<div class="author-image">
										<img src="images/resource/author-6.jpg" alt="" />
									</div>
									<strong>Jeffery Marshall</strong>
									<div class="designation">Founder & Ceo</div>
								</div>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Risus facilisis.</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="author-box">
								<div class="author-inner">
									<div class="author-image">
										<img src="images/resource/author-6.jpg" alt="" />
									</div>
									<strong>Jeffery Marshall</strong>
									<div class="designation">Founder & Ceo</div>
								</div>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Risus facilisis.</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="author-box">
								<div class="author-inner">
									<div class="author-image">
										<img src="images/resource/author-6.jpg" alt="" />
									</div>
									<strong>Jeffery Marshall</strong>
									<div class="designation">Founder & Ceo</div>
								</div>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Risus facilisis.</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Testimonial Section Three -->

		<!-- Clients Section -->
		<!--  -->
		<!-- End Clients Section -->

		<!-- Main Footer -->
		<?php include 'footer.php' ?>
		<!-- End Main Footer -->

	</div>
	<!-- End Page Wrapper -->

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/appear-2.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/tilt.jquery.min.js"></script>
	<script src="js/jquery.paroller.min.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/odometer.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/backToTop.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/cursor-script.js"></script>
	<script src="js/script.js"></script>

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>