<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="new_img/new_logo.png" type="image/x-icon">
	<title>Fine Refiners Pvt. Ltd.</title>

	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">


	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />



	<style>
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



		@media (max-width: 768px) {
			.mob_mar_sec {
				margin-top: 35% !important;

			}
		}




		/* General Animation Styles */
		@keyframes fadeInLeft {
			from {
				opacity: 0;
				transform: translateX(-50px);
			}

			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		@keyframes fadeInRight {
			from {
				opacity: 0;
				transform: translateX(50px);
			}

			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		.map-outer,
		.contact-form-section {
			animation: fadeInLeft 1s ease;
		}

		.contact-form-section .animated {
			animation: fadeInRight 1s ease;
		}

		/* Button Hover Effect */
		.theme-btn {
			transition: transform 0.3s ease;
		}

		.theme-btn:hover {
			transform: scale(1.05);
			
		}

		/* Input Field Animation */
		.input-animated {
			border: 2px solid #e3e3e3;
			transition: all 0.3s ease-in-out;
		}

		.input-animated:focus {
			border-color: #19AC5C;
			box-shadow: 0px 4px 8px rgba(25, 172, 92, 0.2);
		}

		/* Hover Scale for Button */
		.hover-scale {
			transition: transform 0.3s ease-in-out;
		}

		.hover-scale:hover {
			transform: scale(1.05);
		}

		/* Section Title Style */
		.sec-title .title {
			color: #13562B;
			font-weight: bold;
			font-size: 24px;
			margin-bottom: 15px;
		}

		/* Contact Form Section Background Pattern */
		.pattern-layer {
			background-size: cover;
			background-position: center;
		}

		.mob_getintouch {
			display: none;
		}


		body {
			overflow-x: hidden !important;
		}

		@media (max-width: 768px) {

			#pc_GET {
				display: none;
			}

			#mob_GET {
				display: block !important;
			}
		}


		#mob_GET {
			display: none;
		}


		.map-section {
			padding: 20px 0;
		}

		.map-outer iframe {
			width: 100%;
			height: 400px;
			/* Set default height for large screens */
			border: none;
			border-radius: 10px;
			overflow: hidden;
		}

		/* Responsive adjustments for tablet view */
		@media screen and (max-width: 1024px) {
			.map-outer iframe {
				height: 300px;
				/* Decrease height for tablets */
			}
		}

		/* Responsive adjustments for mobile view */
		@media screen and (max-width: 768px) {
			.map-outer iframe {
				height: 250px;
				/* Decrease height for mobile */
			}
		}

		@media screen and (max-width: 480px) {
			.map-section {
				padding: 10px 0;
				/* Reduce padding for very small devices */
			}

			.map-outer iframe {
				height: 200px;
				/* Further decrease height for small mobile devices */
			}
		}
	</style>

</head>

<body style="overflow-x: hidden;">
	<div class="cursor"></div>

	<!-- PageWrapper -->
	<div class="page-wrapper">

		<?php include "nav.php"; ?>


		<section class="page-title" style="position: relative; background-image: url(images/background/9.jpg); background-size: cover; background-position: 0% -40%; height: 55vh;">
			<!-- Overlay -->
			<div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

			<div class="auto-container mob_mar_sec" style="position: relative; z-index: 1; text-align: center; color: white; margin-top: 8%;">
				<ul class="bread-crumb clearfix">
					<li><a href="index.php" style="color: white;">Home</a></li>
					<li>Contact</li>
				</ul>
				<h2>Contact</h2>
			</div>
		</section>

		<!--End Page Title-->



		<!-- Contact Page Section -->
		<section class="contact-page-section">
			<div class="auto-container">
				<!-- Sec Title Three -->
				<div class="sec-title-three centered">
					<h2>Office Near You</h2>
				</div>

				<div class="row clearfix">

					<!-- Location Block -->
					<div class="location-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<span class="icon flaticon-message"></span>
								<strong>Email Address</strong>
								<!-- Sent mail asap anytime -->
							</div>
							+91 9825209230 <br>
							+91 9825209314 <br>
							<!-- aminvasaya9@yahoo.com <br> -->
							finerefiner72@gmail.com <br>
						</div>
					</div>

					<!-- Location Block -->
					<div class="location-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<span class="icon flaticon-factory"></span>
								<strong>Factory Address</strong>
								<!-- call us asap anytime -->
							</div>
							Plot No.40, <br>
							41, GIDC Vartej - 364060, <br>
							Bhavnagar,Gujrat - India
						</div>
					</div>

					<!-- Location Block -->
					<div class="location-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<span class="icon flaticon-home"></span>
								<strong>Office Address</strong>
								<!-- Sent mail asap anytime -->
							</div>
							105. Aangi Arcade,Opp. Jawahar Ground <br>
							Atabhai Rode , Bhavnagar - 364002 , <br>Gujrat - India.
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- End Location Section -->

		<!-- Map Column -->
		<div class="p-3" >
			<div class="p-3" style="border-radius: 10px;  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); background-image: url;">
				<br>
				<br>

				<div class="sec-title alternate centered ">
					<h4 class="title " style="color: #ff3100;">Get In Touch</h4>
				</div>

				<div class="row">




					<!-- Map Column -->
					<div class="col-md-6">
						<section class="map-section">

							<div class="auto-container">
								<div class="inner-container" style="padding: 5px 5px;">

									<!-- Map Outer -->
									<div class="map-outer animated fadeInLeft" style="border-radius: 10px; overflow: hidden;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118577.44666643631!2d72.08282612420537!3d21.75915033034972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7a067bc4bf%3A0x6f279b3e2859f44e!2sFine%20Refiners%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1725951866160!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>
						</section>
						<br>
						<br>

					</div>
					<!-- End Map Column -->

					<!-- Contact Form Column -->
					<div class="col-md-6">
						<div class="contact-form-section">
							<div class="pattern-layer animated pulse infinite" style="background-image:url(images/background/pattern-25.png); opacity: 0.2;"></div>
							<div class="animated fadeInRight">
								<!-- Sec Title -->
								<br>
								<div class="container">
									<div class="inner-container">
										<!-- Contact Form -->
										<div class="contact-form">
											<form method="post" action="https://html.themexriver.com/industo/sendemail.php" id="contact-form">
												<div class="row clearfix">
													<div class="col-lg-6 col-md-6 col-sm-12 form-group">
														<input type="text" name="username" placeholder="Name" required class="input-animated" style="border: 1px solid #024285;">
													</div>

													<div class="col-lg-6 col-md-6 col-sm-12 form-group">
														<input type="email" name="email" placeholder="Your Email" required class="input-animated" style="border: 1px solid #024285;">
													</div>

													<div class="col-lg-6 col-md-6 col-sm-12 form-group">
														<input type="text" name="phone" placeholder="Your Phone" required class="input-animated" style="border: 1px solid #024285;">
													</div>

													<div class="col-lg-6 col-md-6 col-sm-12 form-group">
														<input type="text" name="subject" placeholder="Your Purpose" required class="input-animated" style="border: 1px solid #024285;">
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 form-group">
														<textarea class="input-animated" name="message" placeholder="Message" style="border: 1px solid #024285;"></textarea>
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 form-group">
														<button class="theme-btn btn-style-eight clearfix animated hover-scale" id="contact_btn" style=" color: white;">
															<span class="btn-wrap">
																<span class="text-one">Send Message</span>
																<span class="text-two">Send Message</span>
															</span>
														</button>
													</div>
												</div>
											</form>
										</div>
										<!--End Contact Form -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Contact Form Section -->
				</div>
				<br>
				<br>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<?php include 'footer.php' ?>


		<!-- End Page Wrapper -->

		<script src="js/jquery.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/appear.js"></script>
		<script src="js/owl.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/magnific-popup.min.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/backToTop.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/cursor-script.js"></script>
		<script src="js/script.js"></script>

		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
		<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>