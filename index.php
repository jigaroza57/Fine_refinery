<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Fine Refiners Pvt. Ltd.</title>

    <link rel="shortcut icon" href="new_img/new_logo.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />



    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <style>
        body {
            overflow-x: hidden;
        }

        .main-slider {
            position: relative;
            overflow: hidden;
            height: 100vh;
            /* Adjust the height based on your needs */
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* border-radius: 30px; */
            /* Adjust this for rounded corners */
            box-shadow: inset 0 0 200px rgba(0, 0, 0, 0.9);
            /* Shadow only near the corners */
            z-index: 1;
            pointer-events: none;
            /* Make sure the overlay doesn't block content */
        }


        .content-column {
            position: relative;
            z-index: 2;
            color: #fff;
            /* Ensure text stands out on the video */
        }




        .main-header {
            position: absolute;
            width: 100%;
            z-index: 1000;
        }

        .main-header .header-top,
        .main-header .header-upper,
        .main-header .header-lower,
        .main-header .sticky-header {
            background-color: transparent;
            /* Make the header background transparent */
            box-shadow: none;
            /* Remove any shadow */
        }

        .main-header .sticky-header {
            background-color: rgb(55 63 65 / 38%);
            color: white;
            /* Slightly darker when sticky for better visibility */
        }

        .main-header .navbar-collapse ul li a {
            color: white;
            /* Ensure the menu links are visible */
        }

        .main-header .logo img {
            filter: brightness(100%);
            /* Ensure the logo is bright enough */
        }

        .header-upper .info-box ul li,
        .header-upper .info-box ul li strong {
            color: white;
            /* Set the text color in the upper section */
        }

        .header-upper .icon-box span {
            color: white;
            /* Icon color */
        }

        .header-top .text {
            color: white;
            /* Ensure the top text is visible */
        }

        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.8);
            /* Make dropdown background semi-transparent */
            color: white;
            /* Dropdown text color */
        }


        .sticky-header {
            background-color: rgba(0, 0, 0, 0.8);
            /* Semi-transparent black background for sticky */
            transition: background-color 0.3s ease;
            /* Smooth transition */
        }



        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-menu li {
            list-style: none;
        }

        .dropdown-menu li a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu li a:hover {
            background-color: #575757;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .rogg i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .rogg i {
            transform: rotate(180deg);
        }

        .main-header .sticky-header .main-menu .navigation>li>a {
            padding: 23px 0px;
            color: white;

            /* Semi-transparent background */
            backdrop-filter: blur(5px);
            /* Adjust the blur value as needed */
            -webkit-backdrop-filter: blur(5px);
            /* For Safari support */
        }

        .main-header .main-menu .navigation>li>ul {
            /* background-color: #54a2f47a; */
            /* Semi-transparent background */
            backdrop-filter: blur(5px);
            /* Adjust the blur value as needed */
            -webkit-backdrop-filter: blur(5px);
            /* For Safari support */
        }


        .service-block .inner-box:before {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            background: #5b5c5fe6;
        }



        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .service-block-two {
            width: calc(50% - 15px);
            /* Adjust width and spacing between the cards */
            margin-bottom: 30px;
        }

        @media screen and (max-width: 768px) {
            .service-block-two {
                width: 100%;
                /* Full width for mobile view */
            }
        }





        .shine-container {
            position: relative;
            display: inline-block;
        }

        .animated-image {
            display: block;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 8px 0px #19AC5C;
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
            max-width: 80%;
            animation: float 3s ease-in-out infinite, glow 2s ease-in-out infinite;
        }

        /* Floating and glow animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes glow {
            0% {
                box-shadow: 0 8px 10px #19AC5C;
            }

            50% {
                box-shadow: 0 8px 10px #13562B;
            }

            100% {
                box-shadow: 0 8px 10px #19AC5C;
            }
        }

        /* Shine effect */
        .shine-effect {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.3) 100%);
            transform: skewX(-25deg);
            opacity: 0.9;
            transition: all 0.5s ease;
            animation: shine 2s ease-in-out infinite;
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




        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@300;500;700&display=swap');

        .investor-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #F9FBF8 50%, #024285 50%);
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .investor-section::after {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(19, 172, 92, 0.2) 10%, rgba(19, 86, 43, 0.1) 50%);
            z-index: -1;
            animation: rotateBg 15s linear infinite;
        }

        @keyframes rotateBg {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .section-title {
            font-size: 3.5rem;
            text-align: center;
            font-weight: 700;
            color: #024285;
            margin-bottom: 50px;
            letter-spacing: 2px;
            font-family: 'Montserrat', sans-serif;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 120px;
            height: 5px;
            background-color: #024285;
            display: block;
            margin: 20px auto 0;
            border-radius: 4px;
            animation: growLine 0.8s ease-in-out;
        }

        @keyframes growLine {
            from {
                width: 0;
            }

            to {
                width: 120px;
            }
        }

        .notices,
        .investor-docs,
        .nse-data {
            padding: 30px;
            background-color: #fff;
            /* border-radius: 15px; */
            /* box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            border: 1px solid #13562B;
        }

        .notices,
        .investor-docs,
        .nse-data {
            padding: 30px;
            background-color: #fff;
            /* border-radius: 15px; */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border: 1px solid #13562B;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            animation: floatEffect 5s ease-in-out infinite;
        }

        .notice-box,
        .doc-item,
        .stock-box {
            padding: 20px;
            border-left: 6px solid #024285;
            background-color: #F9FBF8;
            border-radius: 12px;
            margin-bottom: 25px;
            transition: background-color 0.3s ease, border-left-color 0.3s ease;
            position: relative;
        }

        @keyframes floatEffect {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
                box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
            }

            100% {
                transform: translateY(0);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            }
        }

        .notice-box::before,
        .doc-item::before,
        .stock-box::before {
            content: '';
            position: absolute;
            /* top: -100px; */
            left: -100px;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, #05414a6e 10%, rgba(19, 86, 43, 0.1) 50%);
            z-index: -1;
            animation: rotateBoxBg 10s linear infinite;
        }

        @keyframes rotateBoxBg {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .notice-box:hover,
        .doc-item:hover,
        .stock-box:hover {
            background-color: #fff;
            border-left-color: #288fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .notice-box h5,
        .doc-item p,
        .stock-box p {
            color: #024285;
            font-weight: bold;
        }

        .doc-item {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .btn-theme {
            background-color: #0d447f;
            color: #fff;
            padding: 12px 35px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 50px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .btn-theme:hover {
            background-color: #1c6bc1;
            border-color: #19AC5C;
        }

        .date-info {
            color: #888;
            font-size: 0.9rem;
        }

        .stock-price {
            font-size: 2.2rem;
            font-weight: bold;
            color: #13562B;
        }

        .stock-change {
            font-size: 1.3rem;
            color: #E63946;
        }

        .stock-arrow {
            width: 40px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }

            .notice-box,
            .doc-item,
            .stock-box {
                padding: 15px;
            }

            .about-section .image-column .counter-box h2 {
                font-size: 30px;
            }

            .mob_build_more {
                line-height: 32px !important;
                font-size: 20px;
            }

            .mob_only {
                display: block !important;
            }

            .pc_only {
                display: none;
            }

            .pc_expert {
                display: none;
            }

            .mob_expert {
                display: block !important;
            }

        }


        .about-section .image-column .image .circle-layer {
            position: absolute;
            left: -24px;
            top: -24px;
            width: 195px;
            height: 194px;
            z-index: 1;
            border-radius: 50%;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.10);
        }

        .mob_only {
            display: none;
        }

        .mob_expert {
            display: none;
        }

        /* Box-shadow animation */
    </style>
</head>

<body>
    <div class="cursor"></div>

    <div class="page-wrapper">



        <?php include 'nav.php' ?>

        <!-- Preloader -->

        <!-- End Main Header -->

        <!-- Main Slider Section -->
        <section class="main-slider">
            <div class="main-slider-video">

                <video autoplay loop muted playsinline class="video-bg">
                    <source src="img/bgvideo.mp4" type="video/mp4" />

                    Your browser does not support the video tag.
                </video>

                <div class="overlay"></div>
                <div class="auto-container">

                    <div class="content-column">
                        <div class="inner-column">
                            <h1>
                                The UK’s technology <br />
                                trade association
                            </h1>
                            <div class="text">
                                Championing technology's role in preparing and empowering
                                the UK for what comes next, delivering a better future for
                                people, society.
                            </div>
                            <div class="button-box">
                                <a class="btn-style-one theme-btn" href="services.html">
                                    <span class="txt">Our Services
                                        <i class="arrow fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Main Slider Section -->

        <div class="shine-container p-4 pc_expert" style="background: whitesmoke; width: 100vw;">
            <br>
            <img src="img/FRPL-12.png" class="img-fluid p-4 " style="background: whitesmoke;" alt="">
            <div class="shine-effect"></div>
            <br>

        </div>

        <div class="shine-container p-4 mob_expert" style="background: whitesmoke;">
            <br>
            <img src="img/frpl_mob.png" class="img-fluid p-4 " style="background: whitesmoke;" alt="">
            <div class="shine-effect"></div>
            <br>

        </div>
        <!-- Service Section -->

        <!-- End Service Section -->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="big-text">About Us</div>
                                <div class="title">About our Company</div>
                                <h3 style="line-height: 35px; letter-spacing: 1px;">Building a more competitive business sectors.</h3>
                                <div class="text">
                                    Fine Refiners Pvt. Ltd. is an ISO 9001 & 14001 certified company having license from CPCB & GPCB Authorization, established recently with most modern technology for recycling of used & waste oils as per the present day standards so that the environment is kept clean.
                                </div>
                            </div>

                            <!-- Lower Box -->
                            <div class="lower-box clearfix">
                                <div class="button-box">
                                    <a class="btn-style-one theme-btn" href="about.php"><span class="txt">About us <i class="arrow fa fa-angle-right"></i></span></a>
                                </div>
                                <div class="phone-box">
                                    <div class="box-inner">
                                        <span class="icon flaticon-telephone"></span>
                                        Call us for help
                                        <a href="tel:+91 9825209230">

                                            <strong>+91 9825209230</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <center>
                            <div class="inner-column">
                                <!-- Counter Box -->
                                <div class="counter-box">
                                    <div class="row clearfix">
                                        <!-- Counter Column -->
                                        <div class="counter-column col-lg-6 col-md-6 col-sm-12 col-6">
                                            <h2><span class="odometer" data-count="3010"></span>+</h2>
                                            <div class="counter-text">Satisfied Clients</div>
                                        </div>
                                        <!-- Counter Column -->
                                        <div class="counter-column col-lg-6 col-md-6 col-sm-12 col-6">
                                            <h2><span class="odometer" data-count="528"></span>+</h2>
                                            <div class="counter-text">Active Projects</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="images/resource/about.jpg" class="img-fluid" alt="" />
                                    <div
                                        class="circle-layer"
                                        style="background-image: url('img/Fine Refiners Pvt. Ltd._blue.png'); background-repeat: no-repeat; background-size: cover;"></div>
                                    <span class="gear-icon-one flaticon-gear"></span>
                                    <span class="gear-icon-two flaticon-gear"></span>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->



        <!-- Service Section -->
        <section class="service-section-two">
            <div
                class="image-layer"
                style="background-image: url(images/background/1.jpg)"></div>
            <div
                class="pattern-layer-one"
                style="background-image: url(images/background/pattern-1.png)"></div>
            <div
                class="pattern-layer-two"
                style="background-image: url(images/background/pattern-2.png)"></div>
            <div
                class="pattern-layer-three"
                style="background-image: url(images/background/pattern-3.png)"></div>

            <div class="auto-container">
                <div class="sec-title centered">
                    <div class="big-text">Services</div>
                    <div class="title">Our Awesome Services</div>
                    <h2 class="mob_build_more" style="line-height: 55px;">
                        Building a more competitive <br />
                        business sectors.
                    </h2>
                </div>
                <div class="service-container">
                    <!-- Service Block Two -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <center>

                                    <img src="img/sec3.jpg" style="width: 100%;" alt="" />
                                </center>
                                <div class="overlay-box">
                                    <span class="icon flaticon-factory"></span>
                                    <div class="content">
                                        <h4> Recycle Refiners</h4>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-factory"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="service.php">Recycle Refiners</a></h5>
                                            <div class="text">
                                                A mechanical engineer is an engineering professional who researches, designs and tests a variety of mechanical parts or systems. This can include manufacturing systems or mechanisms to assist in processes and functionality of a manufacturing environment or product. These professionals can design everything from small mechanisms such as watch parts to large mechanical machines.
                                            </div>
                                            <a href="service.php" class="read-more">Read more <span class="flaticon-next-3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Two -->
                    <div class="service-block-two style-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="img/service-impoter.jpg" style="width: 100%;" alt="" />
                                <div class="overlay-box">
                                    <!-- <span class="fas fa-industry" style="font-size: 24px; color: #19AC5C;"></span> -->

                                    <span class="icon flaticon-water-control"></span>
                                    <div class="content">
                                        <h5>Importer</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-water-control"></span>

                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="service.php">Importer</a></h5>
                                            <div class="text">
                                                A mechanical engineer is an engineering professional who researches, designs and tests a variety of mechanical parts or systems. This can include manufacturing systems or mechanisms to assist in processes and functionality of a manufacturing environment or product. These professionals can design everything from small mechanisms such as watch parts to large mechanical machines.
                                            </div>
                                            <a href="service.php" class="read-more">Read more <span class="flaticon-next-3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Service Section -->
        <!--  -->
        <!-- Products Section -->
        <section class="products-section mob_only">
            <div
                class="pattern-layer"
                style="background-image: url(images/background/pattern-5.png)"></div>

            <div
                class="pattern-layer-two"
                style="background-image: url(images/background/pattern-6.png)"></div>

            <div
                class="pattern-layer-three"
                style="background-image: url(images/background/pattern-7.png)"></div>

            <div
                class="pattern-layer-four"
                style="background-image: url(images/background/pattern-8.png)"></div>

            <div
                class="pattern-layer-five"
                style="background-image: url(images/background/pattern-11.png)"></div>

            <div class="auto-container">
                <div class="sec-title centered">
                    <!-- <div class="big-text">Products</div> -->
                    <!-- <div class="title">Populat products</div> -->
                    <h2>
                        Our Product
                    </h2>
                </div>
                <div class="products-carousel owl-carousel owl-theme">
                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="product.php"><img src="img/base_oil.png" style="object-fit: cover; height: 200px;" alt="" /></a>
                                </div>
                            </div>

                            <a href="product.php">
                                <h5> Base Oil </h5>
                            </a>


                            <div class="btn-box text-center">
                                <a class="read-more" href="product.php">Read More <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="product.php"><img src="img/Furnace_oil.png" style="object-fit: cover; height: 200px;" alt="" /></a>
                                </div>
                            </div>

                            <a href="product.php">
                                <h5>
                                    Furnace Oil
                                </h5>
                            </a>

                            <div class="btn-box text-center">
                                <a class="read-more" href="product.php">Read More <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="product.php"><img src="img/Diesel Oil.jpg" style="object-fit: cover; height: 200px;" alt="" /></a>
                                </div>
                            </div>
                            <h5 style="font-size: 18px;">
                                <a href="product.php">Industrial Light Diesel Oil </a>
                            </h5>


                            <div class="btn-box text-center">
                                <a class="read-more" href="product.php">Read More <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="product.php"><img src="img/re.png" style="object-fit: cover; height: 200px;" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="product.php">Low Aromatic </a>
                            </h5>


                            <div class="btn-box text-center">
                                <a class="read-more" href="product.php">Read More <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="product.php"><img src="img/modern-factory-industrial-zone-blue-sky.jpg" style="object-fit: cover; height: 200px;" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="product.php">Petroleum Products </a>
                            </h5>


                            <div class="btn-box text-center">
                                <a class="read-more" href="product.php">Read More<span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Products Section -->

        <!-- Project Section -->
        <section class="project-section pc_only">
            <div class="auto-container">
                <!--Product Tabs-->
                <div class="prod-tabs tabs-box">
                    <div
                        class="gear-pattern-layer"
                        style="background-image: url(images/background/pattern-4.png)"></div>
                    <!-- Tab Btns -->
                    <div class="btns-outer">
                        <div
                            class="btns-pattern-layer"
                            style="background-image: url(images/background/2.jpg)"></div>
                        <div class="title-box">
                            <h2>Our Product</h2>
                        </div>
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-building" class="tab-btn active-btn">
                                Base Oil
                            </li>
                            <li data-tab="#prod-industrial" class="tab-btn">Furnace Oil</li>
                            <li data-tab="#prod-architecture" class="tab-btn">
                                Industrial Light Diesel Oil
                            </li>
                            <li data-tab="#prod-construction" class="tab-btn">
                                Low Aromatic
                            </li>

                            <li data-tab="#prod-engineer" class="tab-btn">Petroleum Products</li>
                        </ul>
                    </div>

                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!-- Tab / Active Tab -->
                        <div class="tab active-tab" id="prod-building">
                            <div class="image">
                                <img src="img/base_oil.png" style="width: 1000px; height: 500px;" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(img/base_oil.png)"></div>
                                    <h5>
                                        <a href="product.php"> Base Oil</a>
                                    </h5>
                                    <div class="category">The company strictly follows the ASTM/BIS standards for testing of recycled oil.</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="product.php"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-industrial">
                            <div class="image">
                                <img src="img/Furnace_oil.png" style="width: 1000px; height: 500px;" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(img/Furnace_oil.png)"></div>
                                    <h5>
                                        <a href="product.php">Furnace Oil</a>
                                    </h5>
                                    <div class="category">The company strictly follows the ASTM/BIS standards for testing of recycled oil.</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="product.php"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-architecture">
                            <div class="image">
                                <img src="img/Diesel Oil.jpg" style="width: 1000px; height: 500px;" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url('img/Diesel Oil.jpg');"></div>
                                    <h5>
                                        <a href="product.php">Industrial Light Diesel Oil</a>
                                    </h5>
                                    <div class="category">Packaging Details: Minimum Order Quantity 25000 Litre Features: Used for heavy duty furnace & boiler applications and road plants Optimum ignition quality</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="product.php"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-construction">
                            <div class="image">
                                <img src="img/re.png" style="width: 1000px; height: 500px;" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url('img/re.png')"></div>
                                    <h5>
                                        <a href="product.php">Low Aromatic</a>
                                    </h5>
                                    <div class="category">The company strictly follows the ASTM/BIS standards for testing of recycled oil.</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="product.php"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-interior">
                            <div class="image">
                                <img src="images/gallery/1.jpg" style="width: 1000px; height: 500px;" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="product.php">Petroleum Products</a>
                                    </h5>
                                    <div class="category">Petroleum Products</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="product.php"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-engineer">
                            <div class="image">
                                <img src="img/modern-factory-industrial-zone-blue-sky.jpg" style="width: 1000px; height: 500px;" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(img/modern-factory-industrial-zone-blue-sky.jpg)"></div>
                                    <h5>
                                        <a href="product.php">Petroleum Products</a>
                                    </h5>
                                    <div class="category">Petroleum Products</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="product.php"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Project Section -->

        <!-- Products Section -->

        <!-- End Products Section -->

        <!-- Team Section -->
        <br>
        <br>
        <!--<section class="investor-section">-->
        <!--    <div class="container">-->
        <!--        <h1 class="section-title">Investors</h1>-->
        <!--        <div class="row mt-5">-->
        <!-- Notices Section -->
        <!--            <div class="col-md-4 notices">-->
        <!--                <h4>Notices</h4>-->
        <!--                <br>-->
        <!--                <div class="notice-box">-->
        <!--                    <h5>Aug 29, 2024</h5>-->
        <!--                    <p>Notice of Board Meeting scheduled on September 5, 2024</p>-->
        <!--                </div>-->
        <!--                <div class="notice-box">-->
        <!--                    <h5>Aug 22, 2024</h5>-->
        <!--                    <p>Notice of maturity date and record date for the Commercial Pap...</p>-->
        <!--                </div>-->
        <!--                <button class="btn btn-theme mt-4">Know More</button>-->
        <!--            </div>-->

        <!-- Investor Documents Section -->
        <!--            <div class="col-md-4 investor-docs">-->
        <!--                <h4>Investor Documents</h4>-->
        <!--                <br>-->
        <!--                <div class="doc-item">-->
        <!--                    <img src="img/document.png" alt="Document Icon" class="img-fluid">-->
        <!--                    <p>2024 - 2025 Financial Presentation - Q1 Results 19, July | 2024</p>-->
        <!--                </div>-->
        <!--                <div class="doc-item">-->
        <!--                    <img src="img/document.png" alt="Document Icon" class="img-fluid">-->
        <!--                    <p>2023 - 2024 Financial Presentation - Q4 Results 22, April | 2024</p>-->
        <!--                </div>-->

        <!--                <br>-->
        <!--                <button class="btn btn-theme mt-4">Know More</button>-->
        <!--            </div>-->

        <!-- NSE Data Section -->
        <!--            <div class="col-md-4 nse-data">-->
        <!--                <div class="stock-box">-->
        <!--                    <p>NSE (Fine Refinery pvt. Ltd) <span class="date-info">As on Sep 06, 2024 | 16:03</span></p>-->
        <!--                    <img src="img/arrow-up.png" alt="Arrow Down" style="width: 80px;" class="stock-arrow">-->
        <!--                    <p class="stock-price">₹2,929.65 <span class="stock-change">-->
        <!--                            <div color="#13562B"><b>+56.30 (+1.89%)</b></div>-->
        <!--                        </span></p>-->
        <!--                    <p>Volume: 96,97,114</p>-->
        <!--                </div>-->
        <!--                <div class="stock-box mt-4">-->
        <!--                    <p>BSE (Fine Refinery pvt. Ltd) <span class="date-info">As on Sep 06, 2024 | 16:03</span></p>-->
        <!--                    <img src="img/arrow-up.png" alt="Arrow Down" style="width: 80px;" class="stock-arrow">-->
        <!--                    <p class="stock-price">₹2,929.65 <span class="stock-change">-->
        <!--                            <div color="#13562B"><b>+56.30 (+1.89%)</b></div>-->
        <!--                        </span></p>-->
        <!--                    <p>Volume: 96,97,114</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->





        <!--<br>-->
        <!--<br>-->

        <!-- End Team Section -->

        <!-- CTA Section -->

        <!-- End CTA Section -->

        <!-- News Section -->
        <section class="news-section">
             <div
                class="pattern-layer"
                style="background-image: url(images/background/pattern-5.png)"></div>
            <div
                class="pattern-layer-two"
                style="background-image: url(images/background/pattern-6.png)"></div>
            <div
                class="pattern-layer-three"
                style="background-image: url(images/background/pattern-7.png)"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <div class="big-text">Project</div>
                    <div class="title">What We Do</div>
                    <h2>Our Recent Projects</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme">
                    <!-- Blog Detail -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="category">Industrial</div>
                                <img src="images/resource/news-1.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">

                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5> Gas & Oil Engeneering</h5>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <div
                                        class="image-layer"
                                        style="background-image: url(images/resource/news-4.jpg)"></div>
                                    <span class="post-date">18th <br />
                                        MAY’21</span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5>
                                                <a href="#">Gas & Oil Engeneering</a>
                                            </h5>
                                            <div class="text">
                                                Gas & Oil Engeneering
                                            </div>
                                            <!-- <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Detail -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="category">Industrial</div>
                                <img src="images/resource/news-2.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">

                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>Gas & Oil Engeneering</h5>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <div
                                        class="image-layer"
                                        style="background-image: url(images/resource/news-4.jpg)"></div>
                                    <span class="post-date">18th <br />
                                        MAY’21</span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5>
                                                <a href="#">Gas & Oil Engeneering</a>
                                            </h5>
                                            <div class="text">
                                                Gas & Oil Engeneering
                                            </div>
                                            <!-- <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Blog Detail -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="category">Industrial</div>
                                <img src="images/resource/news-1.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">

                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>Gas & Oil Engeneering</h5>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <div
                                        class="image-layer"
                                        style="background-image: url(images/resource/news-4.jpg)"></div>
                                    <span class="post-date">18th <br />
                                        MAY’21</span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5>
                                                <a href="#">Gas & Oil Engeneering</a>
                                            </h5>
                                            <div class="text">
                                                Gas & Oil Engeneering
                                            </div>
                                            <!-- <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Detail -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="category">Industrial</div>
                                <img src="images/resource/news-2.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">

                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>Gas & Oil Engeneering</h5>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <div
                                        class="image-layer"
                                        style="background-image: url(images/resource/news-4.jpg)"></div>
                                    <span class="post-date">18th <br />
                                        MAY’21</span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5>
                                                <a href="#">Gas & Oil Engeneering</a>
                                            </h5>
                                            <div class="text">
                                                Gas & Oil Engeneering
                                            </div>
                                            <!-- <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End News Section -->
        <?php include 'footer.php' ?>

        <!-- Footer Style Two -->

    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    <!-- End Header Search -->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/odometer.js"></script>
    <script src="js/backToTop.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/cursor-script.js"></script>
    <script src="js/script.js"></script>

    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</body>

</html>