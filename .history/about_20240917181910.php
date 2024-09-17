<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Fine Refiners Pvt. Ltd.</title>
	<link rel="shortcut icon" href="new_img/new_logo.png" type="image/x-icon">

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










		.inner-column {
			position: relative;
			z-index: 2;
		}





		.approach-section::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 63%;
			height: 100%;
			background: #fa4318e6;
			mix-blend-mode: normal;
			opacity: .8;
			clip-path: polygon(0 0, 72% 0, 100% 100%, 0% 100%);
		}







		.approach-section {
			background-image: url('img/vision-mission.webp');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			padding: 40px 0;
			color: white;
		}

		.approach-section h3 {
			color: white;
			font-size: 24px;
		}

		.approach-section hr {
			border: 1px solid white;
			width: 100px;
			/* margin: 20px auto; */
		}

		.approach-section p {
			color: white;
			font-size: 16px;
			line-height: 1.6;
		}

		.approach-section .col-md-6,
		.approach-section .col-md-4 {
			padding: 15px;
		}

		.approach-section .goals-list {
			display: flex;
			flex-direction: column;

			gap: 20px;
		}

		.approach-section .goals-list div {
			display: flex;
			align-items: justify;
			gap: 20px;
		}

		.approach-section .goals-list i {
			color: white;
			font-size: 2rem;
		}

		@media (max-width: 768px) {
			.approach-section .row {
				flex-direction: column;
			}

			.approach-section .col-md-6,
			.approach-section .col-md-4 {
				text-align: center;
				width: 100%;
			}

			.approach-section .col-md-2 {
				display: none;
			}

			.mob_mar_sec {
				margin-top: 35% !important;
			}

			.mob_refinery {
				height: 340px !important;
			}

			.approach-section::before {
				width: 100%;
				clip-path: none;
			}

			.mob_hr {
				margin-left: auto;
				margin-right: auto;
				width: 50%;
			}




			.mob_vision {
				position: relative;
				border: 3px solid #0162f7eb;
				border-radius: 12px;
				padding: 20px;
				background: #ffffff;
				/* Fallback background color */
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
				max-width: 90%;
				margin: 20px auto;
				animation: backgroundColorAnimation 5s infinite alternate, borderColorAnimation 5s infinite alternate;
				transform: scale(0.98);
				opacity: 0.5;
				transition: opacity 1s ease-out, transform 1s ease-out;
			}

			.mob_vision::before {
				content: "";
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-image: url('new_img/Frpl Logo (1).png');
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				opacity: 0.1;
				/* Adjust the opacity of the background image */
				z-index: -1;
				/* Ensure the background image is behind the content */
				border-radius: 12px;
				/* Match border-radius of the main element */
			}

			/* Ensure the main content is positioned above the background */
			.mob_vision>* {
				position: relative;
			}


			.mob_vision p {
				font-size: 13px !important;
				font-family: 'Arial', sans-serif;
				color: #333;
				line-height: 1.6;
				margin: 0;
				opacity: 0;
				transform: translateY(10px);
				transition: opacity 1s ease-out, transform 1s ease-out;
			}

			.mob_vision.animated {
				opacity: 1;
				transform: scale(1);
			}

			.mob_vision h3 {
				color: #0162f7eb;
				font-family: 'Arial', sans-serif;
				font-size: 24px;
				margin-bottom: 10px;
				transform: translateY(-10px);
				transition: transform 1s ease-out, opacity 1s ease-out;
			}

			.mob_vision.animated h3 {
				opacity: 1;
				transform: translateY(0);
			}

			.mob_vision hr {
				border: 0;
				height: 2px;
				background: #0162f7eb;
				margin: 20px auto;
				width: 50%;
				transform: scaleX(0);
				transition: transform 0.5s ease-out;
			}

			.mob_vision.animated hr {
				transform: scaleX(1);
			}

			.mob_vision p {
				font-size: 20px;
				/* Font size for paragraph */
				color: #333;
				/* Text color */
				line-height: 1.6;
				/* Line height */
				margin: 0;
				/* Remove margin */
				opacity: 0;
				/* Initial opacity */
				transform: translateY(10px);
				/* Initial vertical offset */
				transition: opacity 1s ease-out, transform 1s ease-out;
				/* Smooth transition */
			}

			.mob_vision.animated p {
				opacity: 1;
				/* Fully visible */
				transform: translateY(0);


				/* Normal position */
			}

			.goals-list {
				list-style: none;
				padding: 0;
				margin: 0;
				text-align: left;
			}

			.goals-list div {
				display: flex;
				align-items: center;
				margin: 10px 0;
			}


			.goals-list i {
				color: #0162f7eb;
				margin-right: 10px;
				font-size: 24px;
				animation: iconAnimation 3s infinite;
			}

		}

		@keyframes backgroundColorAnimation {
			0% {
				background-color: #ffffff;
			}

			50% {
				background-color: #e0f0ff;
			}

			100% {
				background-color: #ffffff;
			}
		}

		/* Keyframe animation for border color */
		@keyframes borderColorAnimation {
			0% {
				border-color: #0162f7eb;
			}

			50% {
				border-color: #004aad;
			}

			100% {
				border-color: #0162f7eb;
			}
		}

		/* Keyframe animation for icon */
		@keyframes iconAnimation {
			0% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.2);
				color: #004aad;
			}

			100% {
				transform: scale(1);
				color: #0162f7eb;
			}
		}


		@media (max-width: 768px) {
			.mob_vision h3 {
				font-size: 20px;
				/* Adjust heading font size */
			}

			.mob_vision p {
				font-size: 18px;
				/* Adjust paragraph font size */
			}

			.goals-list i {
				font-size: 20px;
				/* Adjust icon size for mobile */
			}

			.mob_icon_color {
				color: #073B70;
			}

			.approach-section .goals-list i {
				color: #073B70 !important;
			}

			.mob_justi {
				text-align: justify;
			}


		}

		@media (max-width: 576px) {
			.approach-section h3 {
				font-size: 20px;
			}

			.approach-section p {
				font-size: 14px;
			}

			.approach-section .fa-circle-check {
				font-size: 1.5rem;
			}

			.approach-section .goals-list {
				gap: 10px;
			}

			.mob_only_welcome {
				display: block !important;
			}

			.pc_only_welcome {
				display: none !important;
			}

		}

		.pc_only_welcome {
			display: block;
		}

		.mob_only_welcome {
			display: none;
		}


		@media only screen and (max-width: 768px) {
			.welcome-section .pattern-layer {
				background-position: bottom center;
				background-size: contain;
			}
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
			<div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; "></div>

			<div class="auto-container mob_mar_sec" style="position: relative; z-index: 1; text-align: center; color: white; margin-top: 8%;">
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

		<center>
			<div class="container mob_only_welcome">

				<h1 style=" font-size: 22px; letter-spacing: 2px;  opacity: 0.4; font-weight: 900;">WELCOME TO </h1>

				<h1 class="mt-3" style="font-size: 25px;  font-family: 'Playfair Display', serif; font-style: italic; color: #FA4318;">Fine Refiners PVT. LTD.</h1>
			</div>
		</center>
		<br>



		<!-- Welcome Section / Style Two -->
		<section class="welcome-section style-two">
			<div class="pattern-layer" style="background-image:url(images/background/pattern-25.png)"></div>
			<div class="pattern-layer-two" style="background-image:url(images/icons/shape-3.png)"></div>
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-5 col-md-12 col-sm-12">
						<br>
						<div class="inner-column">
							<div class="image wow " data-wow-delay="0ms" data-wow-duration="1500ms">

								<img src="img/ne1.jpg" class="mob_refinery" alt="" style=" width: 570px; height: 670px; " />
							</div>


							<!-- <div class="color-layer"></div> -->
							<!-- <div class="big-text">about</div> -->
						</div>
					</div>

					<div class="col-lg-1"></div>
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">

						<div class="inner-column mt-4">
							<!-- Sec Title Three -->
							<div class="sec-title-three">
								<div class="title pc_only_welcome"><span>Welcome to</span> Fine Refiners PVT. LTD.</div>
								<h3 class="pc_only_welcome">28+ Years of Experience in Oil Refinery</h3>
								<div class="text" style="text-align: justify;">Fine Refiners Pvt. Ltd. is an ISO 9001 & 14001 certified company with licenses from CPCB & GPCB Authorization. We employ the latest technology for recycling used & waste oils, adhering to modern standards to ensure environmental cleanliness. Managed by Mr. Amin R. Vasaya, who has over a decade of experience in oil recycling, our company is dedicated to excellence in every aspect of our operations.</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<ul class="list">
										<li>Our Work Growth</li>
										<li>1500 Employed</li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<ul class="list">
										<li>Our Employee Growth</li>
										<li>Service Management</li>
									</ul>
								</div>
							</div>
							<!-- Quality Box -->
							<div class="quality-box pc_only_welcome">
								<div class="quality-inner">
									<div class="icon-container">
										<span class="icon flaticon-trophy-2"></span>
										<h4>Best Quality</h4>
										<div class="text">
											We adhere strictly to ASTM/BIS standards for testing recycled base oil and fuel oil. Our tests ensure that the material conforms to Schedule 5 or 6 before processing, even though the responsibility lies with the owners. Our excellent laboratory facilities guarantee thorough testing of our products, ensuring top-notch quality before they reach the market.
										</div>
									</div>

								</div>
							</div>


							<div class="quality-box mob_only_welcome">
								<div class="icon-container" style="background-image: url();">
									
									<h4 style="text-align: center;">Best Quality</h4>
									<div class="text" style="text-align: justify;">
										We adhere strictly to ASTM/BIS standards for testing recycled base oil and fuel oil. Our tests ensure that the material conforms to Schedule 5 or 6 before processing, even though the responsibility lies with the owners. Our excellent laboratory facilities guarantee thorough testing of our products, ensuring top-notch quality before they reach the market.
									</div>
								</div>
							</div>


							<!-- Btn Box -->


						</div>


						<!-- <div class="inner-column">
							
							<div class="sec-title-three">
								<div class="title pc_only_welcome">
									<span>Welcome to</span> Fine Refiners PVT. LTD.
								</div>
								<h4>28+ Years of Experience in Oil Refinery</h4>
								<div class="text" style="color: white; font-size: 18px;">
									Fine Refiners Pvt. Ltd. is an ISO 9001 & 14001 certified company with licenses from CPCB & GPCB Authorization. We employ the latest technology for recycling used & waste oils, adhering to modern standards to ensure environmental cleanliness. Managed by Mr. Amin R. Vasaya, who has over a decade of experience in oil recycling, our company is dedicated to excellence in every aspect of our operations.
								</div>
							</div>

						
							<div class="quality-box">
								<div class="quality-inner">
									

									<div class="text" style="font-size: 18px;">

										We adhere strictly to ASTM/BIS standards for testing recycled base oil and fuel oil. Our tests ensure that the material conforms to Schedule 5 or 6 before processing, even though the responsibility lies with the owners. Our excellent laboratory facilities guarantee thorough testing of our products, ensuring top-notch quality before they reach the market.
									</div>
								</div>
							</div>
						</div> -->
					</div>


				</div>
			</div>
		</section>
		<!-- End Welcome Section -->

		<br><br>
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
							<h3><span class="odometer" data-count="1500"></span>+</h3>
							<div class="counter-text">Chain of Factories</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="icon-box">
								<span class="icon flaticon-fluid-mechanics"></span>
							</div>
							<h3><span class="odometer" data-count="1.5"></span>K</h3>
							<div class="counter-text">Engineering Project</div>
						</div>
					</div>

					<!-- Counter Column -->
					<div class="counter-column col-lg-4 col-md-6 col-sm-12">
						<div class="inner-column">
							<div class="icon-box">
								<span class="icon flaticon-world-1"></span>
							</div>
							<h3><span class="odometer" data-count="266"></span>K</h3>
							<div class="counter-text">Worldwide Partner</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Counter Section -->

		<br><br>




		<!-- Approach Section -->
		<section class="approach-section">
			<div class="auto-container">
				<!-- Sec Title Three -->
				<div class="row">
					<div class="col-md-6">
						<div class="mob_vision" id="vision-section">
							<h3>Our Vision</h3>
							<hr class="mt-4 mob_hr">
							<p class="mob_justi" style="font-size: 20px;">" To be the leading innovator in sustainable oil recycling, setting the global standard for environmental stewardship and resource efficiency while contributing to a circular economy. "</p>
						</div>
						<br>
						<br>
						<div class="mob_vision" id="mission-section">

							<h3>Our Mission</h3>
							<hr class="mt-4 mob_hr">
							<p class="mob_justi" style="font-size: 20px;">" Our mission is to advance the lifecycle of used oils through cutting-edge recycling technologies and refining processes. We are committed to reducing environmental impact by transforming waste into valuable resources, fostering sustainable practices, and delivering high-quality, eco-friendly products to our customers. "</p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="mob_vision" id="goals-section">
							<h3>Our Goals</h3>
							<hr class="mt-4 mob_hr">
							<div class="goals-list">
								<div>
									<i class="fa-regular fa-circle-check mob_icon_color"></i>
									<p>Environmental Impact Reduction</p>
								</div>
								<div>
									<i class="fa-regular fa-circle-check mob_icon_color"></i>
									<p>Innovation and Technology Development</p>
								</div>
								<div>
									<i class="fa-regular fa-circle-check mob_icon_color"></i>
									<p>Sustainable Operations</p>
								</div>
								<div>
									<i class="fa-regular fa-circle-check mob_icon_color"></i>
									<p>Community and Industry Engagement</p>
								</div>
								<div>
									<i class="fa-regular fa-circle-check mob_icon_color"></i>
									<p>Economic Viability and Growth</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Approach Section -->

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const sections = document.querySelectorAll('.mob_vision');

				const observer = new IntersectionObserver(entries => {
					entries.forEach(entry => {
						if (entry.isIntersecting) {
							entry.target.classList.add('animated');
							observer.unobserve(entry.target); // Stop observing after animation
						}
					});
				}, {
					threshold: 0.2
				}); // Adjust the threshold as needed

				sections.forEach(section => observer.observe(section));
			});
		</script>

		<br><br><br><br>


		<!-- Clients Section -->
		<section class="clients-section">
			<div class="auto-container">
				<!-- Sec Title Three -->
				<div class="sec-title alternate centered">
					<div class="title">Clients</div>
					<h2>Our Trusted Sponsor</h2>
				</div>

				<div class="carousel-outer">
					<!-- Sponsors Slider -->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div>
						</li>
						<li>
							<div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div>
						</li>
					</ul>
				</div>

			</div>
		</section>
		<!-- End Clients Section -->

		<!-- Testimonial Section Three -->
		<section class="testimonial-section-three" style="background-image:url(images/background/map.png)">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title alternate centered">
					<div class="title">Our Testimonial</div>
					<h2>Happy Client Says </h2>
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
									<p style="color: white; font-size: 20px;">Apex Software House</p>
									<div class="designation">IT Company</div>
								</div>
							</div>
							<div class="text">The Fine Refiners Pvt. Ltd. is the one of the Best Leading Re-finers</div>
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
									<p style="color: white; font-size: 20px;">Apex Software House</p>
									<div class="designation">IT Company</div>
								</div>
							</div>
							<div class="text">The Fine Refiners Pvt. Ltd. is the one of the Best Leading Re-finers</div>
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
									<p style="color: white; font-size: 20px;">Apex Software House</p>
									<div class="designation">IT Company</div>
								</div>
							</div>
							<div class="text">The Fine Refiners Pvt. Ltd. is the one of the Best Leading Re-finers</div>
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
									<p style="color: white; font-size: 20px;">Apex Software House</p>
									<div class="designation">IT Company</div>
								</div>
							</div>
							<div class="text">The Fine Refiners Pvt. Ltd. is the one of the Best Leading Re-finers</div>
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
									<p style="color: white; font-size: 20px;">Apex Software House</p>
									<div class="designation">IT Company</div>
								</div>
							</div>
							<div class="text">The Fine Refiners Pvt. Ltd. is the one of the Best Leading Re-finers</div>
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
									<p style="color: white; font-size: 20px;">Apex Software House</p>
									<div class="designation">IT Company</div>
								</div>
							</div>
							<div class="text">The Fine Refiners Pvt. Ltd. is the one of the Best Leading Re-finers</div>
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