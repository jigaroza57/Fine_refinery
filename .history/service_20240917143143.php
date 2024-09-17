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

    <link rel="shortcut icon" href="new_img/new_logo.png" type="image/x-icon">

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

        @media (max-width: 768px) {
            .mob_mar_sec {
                margin-top: 35% !important;

            }
        }


        /* Hide Swiper slider on non-mobile devices */
        .swiper-container {
            display: none;
        }

        @media (max-width: 768px) {

            /* Show Swiper slider on mobile devices */
            .swiper-container {
                display: block;
                position: relative;
            }

            .swiper-pagination {
                position: absolute;
                bottom: -25px !important;
                /* Adjust this value to position the pagination properly */
                left: 0 !important;
                width: 100% !important;
                text-align: center;
                color: #fff;
                /* Change this color as needed */
            }

            .swiper-pagination-bullet-active {
                background: #024285;
            }

            .mob_slid_hid {
                display: none;
            }

            .mob_blocks {
                margin-top: 50px;
            }

            .process-section {
                padding: 100px 0px 0px;
            }

            .mob_importer {
                display: block !important;
            }

            .pc_impor {
                display: none;
            }
        }

        .process-block .inner-box .number {
            color: #ff340f;
            font-weight: bold;
        }


        .mob_importer {
            display: none;
        }




        /* Container styling */
        .fuel-form-container {
            max-width: 400px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: auto;
            font-family: Arial, sans-serif;
            position: relative;
            overflow: hidden;
            /* Ensures the shine effect stays within the container */
        }

        /* Heading */
        .fuel-form-container h2 {
            color: #024285;
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .fuel-form-container p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        /* Email form input */
        .email-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .email-form input[type="email"] {
            flex: 1;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .btn-submit {
            background-color: #19AC5C;
            color: white;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #13562B;
        }

        /* Mobile view: show button below the email input */
        @media (max-width: 768px) {
            .email-form {
                flex-direction: column;
            }

            .btn-submit {
                width: 100%;
            }
        }

        /* Shine effect */
        .fuel-form-container .shine-effect {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.3) 100%);
            transform: skewX(-25deg);
            opacity: 0.7;
            transition: all 0.5s ease;
            animation: shine 2s ease-in-out infinite;
        }

        /* Fuel list */
        .fuel-list {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .fuel-list li {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #FA4318;
            margin-bottom: 10px;
        }

        .fuel-list img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        /* Shine Animation */
        @keyframes shine {
            0% {
                left: -100%;
            }

            50% {
                left: 100%;
            }

            100% {
                left: 100%;
            }
        }


        .responsive-img {
            width: 100%;
            height: 600px;
            /* This ensures the aspect ratio is maintained */
            max-width: 450px;
            max-height: 555px;
        }

        @media (max-width: 768px) {
            .responsive-img {
                max-width: 100%;
                /* Allow the image to scale down */
                height: auto;
                /* Maintain aspect ratio */
            }
        }

        @media (max-width: 480px) {
            .responsive-img {
                width: 100%;
                /* Take up full width of container */
                height: auto;
            }
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

            <div class="auto-container mob_mar_sec" style="position: relative; z-index: 1; text-align: center; color: white; margin-top: 8%;">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php" style="color: white;">Home</a></li>
                    <li>Services</li>
                </ul>
                <h2>Services</h2>
            </div>
        </section>






        <!-- Process Section -->
        <section class="process-section" style="padding: 97px 0px 6px !important;">
            <div class="auto-container">
                <center>
                    <div class="sec-title alternate mob_importer">
                        <div class="title" style="font-size: 25px;"> Our Services</div>
                        <h2 style="font-size: 32px;">Recycle Refiners </h2>
                    </div>

                </center>


                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title alternate pc_impor">
                                <div class="title"> Our Services</div>
                                <h2>Recycle Refiners </h2>
                            </div>

                            <br>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="img/1000_F_745514998_veXrZMbObF8saxl8p5fU55UV7UPLLSL2.jpg" style="width: 370px; height: 315px;" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/1000_F_422327639_DabIsuKh76nLXIoatQcgM49Ajib7zlc3.jpg" style="width: 370px; height: 315px;" alt="" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/1000_F_202041790_IEm5uH34upAWAgFeHn0M3ksEKmoSsKJ1.jpg" style="width: 370px; height: 315px;" alt="" />
                                    </div>
                                    <br>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- Add Pagination -->
                            </div>
                            <br>
                            <!-- Blocks Outer -->
                            <div class="blocks-outer mob_blocks">

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">01</div>
                                        <strong>Gujarat Pollution Control Board</strong>
                                        "We are a GPCB approved refinery, ensuring our operations meet environmental standards and regulations."
                                    </div>
                                </div>

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">02</div>
                                        <strong>Re-refined Base Oil from used Oil</strong>
                                        "We specialize in providing high-quality re-refined base oil derived from used oil, ensuring an efficient recycling process."
                                    </div>
                                </div>

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">03</div>
                                        <strong>Recycle Fuel oil from West Oil</strong>
                                        "Our facility produces recycled fuel oil from waste oil, contributing to environmental resource recovery."
                                    </div>
                                </div>
                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">04</div>
                                        <strong>Distillation Process Crude Oil</strong>
                                        "We employ advanced distillation processes to refine crude oil, delivering superior quality products."
                                    </div>
                                </div>
                            </div>
                            <!-- Process Block -->
                            <!--    <div class="process-block">-->
                            <!--        <div class="inner-box">-->
                            <!--            <div class="number">05</div>-->
                            <!--            <strong style="color:#1a683e">Distillation process crude oil. </strong>-->
                            <!--        "We employ advanced distillation processes to refine crude oil, delivering superior quality products."-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- End Blocks Outer -->
                        </div>
                    </div>

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column mob_slid_hid">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="img/1000_F_745514998_veXrZMbObF8saxl8p5fU55UV7UPLLSL2.jpg" style="width: 370px; height: 215px;" alt="" />
                            </div>
                            <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="img/1000_F_422327639_DabIsuKh76nLXIoatQcgM49Ajib7zlc3.jpg" style="width: 370px; height: 315px;" alt="" />
                            </div>
                            <div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="img/1000_F_202041790_IEm5uH34upAWAgFeHn0M3ksEKmoSsKJ1.jpg" style="width: 320px; height: 320px;" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Process Section -->

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000, // Adjust the delay as needed
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                effect: 'fade', // Optional: Change effect to 'slide' or 'cube' if desired
            });
        </script>


        <!-- Process Section -->
        <section class="process-section" style="padding: 96px 0px 1px;">
            <div class="auto-container">
                <center>
                    <div class="sec-title alternate mob_importer">
                        <div class="title" style="font-size: 25px;"> Our Services</div>
                        <h1 style="font-size: 40px;">Importer </h1>
                    </div>
                </center>
                <div class="row clearfix">


                    <!-- Images Column -->
                    <div class="images-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="img/service-impoter.jpg" class="responsive-img" alt="Service Image" />
                            </div>

                            <!--<div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
                            <!--    <img src="img/1000_F_422327639_DabIsuKh76nLXIoatQcgM49Ajib7zlc3.jpg" style="width: 370px; height: 315px;" alt="" />-->
                            <!--</div>-->
                            <!--<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">-->
                            <!--    <img src="img/1000_F_202041790_IEm5uH34upAWAgFeHn0M3ksEKmoSsKJ1.jpg" style="width: 320px; height: 320px;" alt="" />-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="col-lg-1"></div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title alternate pc_impor">
                                <div class="title"> Our Services</div>
                                <h2>Importer </h2>
                            </div>
                            <!-- Blocks Outer -->
                            <div class="blocks-outer">

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">01</div>
                                        <strong>Discussions About Project </strong>
                                        "We need to review the project scope and address any potential challenges to ensure successful execution."

                                    </div>
                                </div>

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">02</div>
                                        <strong>Skills & Qualities</strong>
                                        "Our team is defined by a diverse range of essential competencies and attributes that drive our success."
                                    </div>
                                </div>

                                <!-- Process Block -->
                                <div class="process-block">
                                    <div class="inner-box">
                                        <div class="number">03</div>
                                        <strong>Handover & Save World</strong>
                                        "We focus on a seamless transition process to ensure that our initiatives contribute positively to global sustainability."
                                    </div>
                                </div>

                            </div>
                            <!-- End Blocks Outer -->
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Process Section -->

           <br>sasdijijsadasjijijijijijijij



        <div class="pattern-layer-three" style="background-image: url(img/e1_blue.png)"></div>

        <div class="p-3">

            <div class="fuel-form-container">
                <h2>Reduce your fuel cost with substitute fuel.</h2>
                <p>We have been serving the requirements of a number of high-end industries by offering optimum quality Industrial Oil.</p>

                <div class="email-form">
                    <input type="email" placeholder="Tell us your Email address" required>
                    <button class="btn-submit" style="background: #FA4318;">Book Request</button>
                </div>

                <h3>We Deal In:</h3>
                <br>

                <ul class="fuel-list">
                    <li><img src="img/furnace.png" alt="Furnace Oil"> FURNACE OIL</li>
                    <li><img src="img/gasoline (2).png" alt="Diesel Oil"> LIGHT DIESEL OIL</li>
                    <li><img src="img/oil-refinery.png" alt="Industrial Oil"> OTHER INDUSTRIAL OILS</li>
                </ul>

                <!-- Shine effect added here -->
                <div class="shine-effect"></div>
            </div>

            <div class="pattern-layer-three" style="background-image: url(img/e1_blue.png)"></div>

        </div>



        <br>
        <br>
        <br>
        <br>



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
                                <a href="img/bgvideo.mp4" class="lightbox-video overlay-box"><span class="flaticon-media-play-symbol transition-900ms"><i class="ripple"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Skill Column -->
                    <div class="skill-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title Three -->
                            <div class="sec-title-three light">
                                <div class="title">Our Industry Skill</div>
                                <h4 style="color: #020437 !important;">Get a solution for all your Industries needs.</h4>
                                <div class="text">Fine Refiners Pvt. Ltd. is an ISO 9001 & 14001 certified company having license from CPCB & GPCB Authorization, established recently with most modern technology for recycling of used & waste oils as per the present day standards so that the environment is kept clean. </div>
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