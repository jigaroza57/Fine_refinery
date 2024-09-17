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

        <?php include 'nav.php' ?>



        <!-- Page Title -->
        <!-- Page Title -->
        <section class="page-title" style="position: relative; background-image: url(images/background/9.jpg); background-size: cover; background-position: 0% -40%; height: 55vh;">
            <!-- Overlay -->
            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

            <div class="auto-container" style="position: relative; z-index: 1; text-align: center; color: white; margin-top: 8%;">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php" style="color: white;">Home</a></li>
                    <li>Services</li>
                </ul>
                <h2>Services</h2>
            </div>
        </section>



       

       
        <!-- Process Section -->
        <section class="process-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title alternate">
                                <div class="title">How It Work</div>
                                <h2>Our Company Working Process</h2>
                            </div>
                            <!-- Blocks Outer -->
                            <div class="blocks-outer">

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">01</div>
                                        <strong>Discussions About Project</strong>
                                        Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt
                                    </div>
                                </div>

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">02</div>
                                        <strong>Start Work With Team</strong>
                                        Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt
                                    </div>
                                </div>

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">03</div>
                                        <strong>Handover & Save World</strong>
                                        Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt
                                    </div>
                                </div>

                            </div>
                            <!-- End Blocks Outer -->
                        </div>
                    </div>

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="images/resource/process-1.jpg" style="width: 270px; height: 215px;" alt="" />
                            </div>
                            <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="images/resource/process-2.jpg" style="width: 370px; height: 315px;" alt="" />
                            </div>
                            <div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="images/resource/process-3.jpg" style="width: 320px; height: 315px;" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Process Section -->

        <!-- Skill Section -->
        <section class="skill-section">
            <div class="image-layer" style="background-image:url(images/background/8.jpg)"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Video Column -->
                    <div class="video-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Video Box -->
                            <div class="video-box">
                                <figure class="video-image">
                                    <img class="transition-500ms" src="images/resource/video.jpg" alt="">
                                </figure>
                                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video overlay-box"><span class="flaticon-media-play-symbol transition-900ms"><i class="ripple"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Skill Column -->
                    <div class="skill-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title Three -->
                            <div class="sec-title-three light">
                                <div class="title">Our Industry Skill</div>
                                <h2>Get a solution for all your Industries needs.</h2>
                                <div class="text">Dunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</div>
                            </div>

                            <!-- Skills -->
                            <div class="skills">

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Production</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="90">
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Industrial</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="80">
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Factory</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="95">
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Production</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="85">
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Skill Section -->

      

        <?php include 'footer.php' ?>

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