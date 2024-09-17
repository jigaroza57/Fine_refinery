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
								<img src="img/about2.jpg" alt="" />
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
                <span class="welcome-text">Welcome to</span> 
                <span class="company-name">Fine Refiners PVT. LTD.</span>
            </div>
            <h4 class="experience">28+ Years of Experience in Oil Refinery</h4>
            <div class="text">
                Fine Refiners Pvt. Ltd. is an ISO 9001 & 14001 certified company with licenses from CPCB & GPCB Authorization. Established recently with modern technology for recycling used & waste oils to meet current standards and keep the environment clean. The promoters have over a decade of experience in the oil recycling business. Managed by Mr. Amin R. Vasaya (Director), who has vast experience in the field of recycling used/waste oils.
            </div>
        </div>

        <!-- Quality Box -->
        <div class="quality-box">
            <div class="quality-inner">
                <span class="icon">
                    <img src="img/astm.png" alt="ASTM Certification">
                </span>
                <div class="text">
                    <i class="fa-solid fa-circle-check fa-2x "></i>
                    <p>The company strictly follows the ASTM/BIS standards for testing recycled base oil and recycled fuel oil. Tests are conducted to ensure the material is used oil or waste oil as per Schedule 5 or 6 before lifting, although it is the responsibility of the owners. It has an excellent laboratory facility for product testing and thorough scrutiny is carried out to confirm the quality before marketing.</p>
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
		<section class="approach-section">
			<div class="auto-container">
				<!-- Sec Title Three -->
				<div class="sec-title alternate centered">
					<!-- <div class="title">Our Approch</div> -->
					<h2>Our Approch</h2>
					<div class="text">We Provide Inovative Solution.</div>
				</div>
				<div class="row clearfix">

					<!-- Approach Block -->
					<div class="approach-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="img/vision.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="oil-gas.html">Our Vision</a></h4>
								<div class="text">"To be the leading innovator in sustainable oil recycling, setting the global
									standard for environmental stewardship and resource efficiency while
									contributing to a circular economy."</div>
							</div>
						</div>
					</div>

					<!-- Approach Block -->
					<div class="approach-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="img/mission.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="oil-gas.html">Our Mission</a></h4>
								<div class="text">"Our mission is to advance the lifecycle of used oils through cutting-edge
									recycling technologies and refining processes. We are committed to reducing
									environmental impact by transforming waste into valuable resources,
									fostering sustainable practices, and delivering high-quality, eco-friendly
									products to our customers." </div>
							</div>
						</div>
					</div>

					<!-- Approach Block -->
					<div class="approach-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="#"><img src="img/goal.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<h4><a href="oil-gas.html">Our Goals</a></h4>
								<div class="text">Environmental Impact Reduction , Innovation and Technology Development , Quality and Product Excellence , Sustainable Operations , Community and Industry Engagement , Economic Viability and Growth</div>
							</div>
						</div>
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
		<footer class="main-footer" style="background-image:url(images/background/pattern-12.png)">
			<div class="auto-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="logo">
											<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
										</div>
										<div class="text">We work with a passion of taking challenges and creating new ones in advertising sector.</div>
										<a href="about.html" class="theme-btn about-btn">About us</a>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget newsletter-widget">
										<h4>Newsletter</h4>
										<div class="text">Subscribe our newsletter to get our latest update & news</div>

										<!-- Email Box -->
										<div class="email-box">
											<form method="post" action="https://html.themexriver.com/industo/contact.html">
												<div class="form-group">
													<input type="email" name="search-field" value="" placeholder="Your mail address" required>
													<button type="submit"><span class="icon flaticon-send"></span></button>
												</div>
											</form>
										</div>

										<!-- Social Box -->
										<ul class="social-box">
											<li><a href="#" class="fa fa-facebook-f"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-dribbble"></a></li>
											<li><a href="#" class="fa fa-behance"></a></li>
										</ul>
										<!-- End Social Box -->

									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget contact-widget">
										<h4>Official info:</h4>
										<ul class="contact-list">
											<li><span class="icon fa fa-phone"></span> 30 Commercial Road <br> Fratton, Australia</li>
											<li><span class="icon fa fa-envelope"></span> 1-888-452-1505</li>
										</ul>
										<div class="timing">
											<strong>Open Hours: </strong>
											Mon - Sat: 8 am - 5 pm, <br> Sunday: CLOSED
										</div>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget instagram-widget">
										<h4>instagram</h4>
										<div class="widget-content">
											<div class="images-outer clearfix">
												<!--Image Box-->
												<figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
												<!--Image Box-->
												<figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
												<!--Image Box-->
												<figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
												<!--Image Box-->
												<figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
												<!--Image Box-->
												<figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
												<!--Image Box-->
												<figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<div class="footer-bottom">
					<div class="copyright">&copy; 2022 Industo - All rights reserved. <a href="https://themeforest.net/user/themexriver">Themexriver</a></div>
				</div>

			</div>
		</footer>
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