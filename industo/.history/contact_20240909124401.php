<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Industo Industry HTML-5 Template | Contact</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

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







		.contact-page-section {
			background: #f8f9fa;
			/* Light background color */
			padding: 80px 0;
			/* Increased padding for better spacing */
		}

		.sec-title-three h2 {
			font-size: 2.6em;
			/* Slightly smaller font size for better balance */
			color: #333;
			/* Darker text color for better readability */
			text-align: center;
			margin-bottom: 50px;
			/* Increased bottom margin */
			font-weight: 700;
			text-transform: uppercase;
		}

		.location-block {
			background: #ffffff;
			border-radius: 15px;
			/* Slightly larger border radius */
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
			/* Enhanced box shadow for depth */
			padding: 30px;
			/* Increased padding */
			margin-bottom: 30px;
			/* Adjusted bottom margin */
			transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
			border: 2px solid #007bff;
			/* Blue border */
			position: relative;
			/* Allows for additional styling elements */
		}

		.location-block::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border-radius: 15px;
			background: rgba(0, 123, 255, 0.05);
			/* Light blue overlay */
			z-index: 0;
			/* Place behind content */
		}

		.location-block:hover {
			transform: translateY(-10px);
			/* Slight upward movement on hover */
			box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
			/* Enhanced shadow on hover */
		}

		.location-block .inner-box {
			position: relative;
			/* Ensure content is above the pseudo-element */
			z-index: 1;
			/* Place content above the overlay */
		}

		.location-block .icon {
			font-size: 3em;
			/* Larger icons */
			color: #007bff;
			/* Consistent icon color */
			margin-bottom: 20px;
			/* Increased margin for better spacing */
		}

		.location-block .content strong {
			display: block;
			font-size: 1.5em;
			/* Larger font size */
			margin-bottom: 20px;
			/* Increased margin */
			color: #333;
			/* Darker color for better readability */
		}

		.location-block address {
			font-style: normal;
			color: #495057;
		}

		.location-block p {
			font-size: 1.2em;
			/* Slightly larger font size for phone numbers */
			color: #495057;
		}

		@media (max-width: 768px) {
			.sec-title-three h2 {
				font-size: 2.2em;
				/* Slightly smaller font size */
			}

			.location-block {
				margin-bottom: 30px;
				/* Adjusted bottom margin */
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

			<div class="auto-container" style="position: relative; z-index: 1; text-align: center; color: white; margin-top: 8%;">
				<ul class="bread-crumb clearfix">
					<li><a href="index.php" style="color: white;">Home</a></li>
					<li>Contact</li>
				</ul>
				<h2>Contact</h2>
			</div>
		</section>

		<!--End Page Title-->


		<section class="contact-page-section">
			<div class="auto-container">
				<div class="sec-title-three centered">
					<h2>Office Near You</h2>
				</div>
				<div class="row clearfix">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="location-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<span class="icon flaticon-message row" aria-hidden="true"></span>
									<br>
									<strong>Email Address</strong>
									<address>
										<a href="mailto:finerefiner72@gmail.com">finerefiner72@gmail.com</a>
									</address>
									<p>+91 9825209230<br>+91 9825209314</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="location-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<span class="icon flaticon-factory" aria-hidden="true"></span>
									<strong>Factory Address</strong>
									<address>
										Plot No.40, 41, GIDC Vartej - 364060,<br>
										Bhavnagar, Gujarat - India
									</address>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="location-block">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<span class="icon flaticon-home" aria-hidden="true"></span>
									<strong>Office Address</strong>
									<address>
										105, Aangi Arcade, Opp. Jawahar Ground<br>
										Atabhai Rode, Bhavnagar - 364002,<br>
										Gujarat - India
									</address>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<!-- Map Column -->
		<div class="row">
			<div class="col-md-6">
				<section class="map-section">
					<div class="auto-container">
						<div class="inner-container">
							<!-- Map Outer -->
							<div class="map-outer">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- End Map Column -->
			<div class="col-md-6">
				<!-- Contact Form Section -->
				<div class="contact-form-section">
					<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
					<div class="auto-container">
						<!-- Sec Title -->
						<div class="sec-title alternate centered">
							<div class="title">Get In Touch</div>
							<!-- <h2>Needs Help? Let’s Get in Touch</h2> -->
						</div>
						<div class="inner-container">

							<!-- Contact Form -->
							<div class="contact-form">

								<!-- Contact Form -->
								<form method="post" action="https://html.themexriver.com/industo/sendemail.php" id="contact-form">
									<div class="row clearfix">

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="Your Email" required>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="phone" placeholder="Your Phone" required>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="subject" placeholder="Your Subject" required>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea class="" name="message" placeholder="Message"></textarea>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-eight clearfix">
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
			<!-- End Contact Form Section -->

			<?php include 'footer.php' ?>

		</div>
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