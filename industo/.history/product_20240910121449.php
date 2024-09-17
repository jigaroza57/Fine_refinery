<!DOCTYPE html>
<html id="home" dir="ltr" lang="en-US">

<head>

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

    <link rel="shortcut icon" href="img/logo_bg.png" type="image/x-icon" />
    <link rel="icon" href="img/logo_bg.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <style type="text/css">
        .is-overlay,
        .modal,
        .modal-background {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        blockquote,
        body,
        dd,
        dl,
        dt,
        fieldset,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        html,
        iframe,
        legend,
        li,
        ol,
        p,
        pre,
        textarea,
        ul {
            margin: 0;
            padding: 0
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%;
            font-weight: 400
        }

        ul {
            list-style: none
        }

        button,
        input,
        select,
        textarea {
            margin: 0
        }

        html {
            box-sizing: border-box
        }

        *,
        ::after,
        ::before {
            box-sizing: inherit
        }

        img,
        video {
            height: auto;
            max-width: 100%
        }

        iframe {
            border: 0
        }

        html {
            background-color: #fff;
            font-size: 16px;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            min-width: 300px;
            overflow-x: hidden;
            overflow-y: scroll;
            text-rendering: optimizeLegibility;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%
        }

        article,
        aside,
        figure,
        footer,
        header,
        hgroup,
        section {
            display: block
        }

        body {
            color: #4a4a4a;
            font-size: 1em;
            font-weight: 400;
            line-height: 1.5
        }

        a {
            color: #3273dc;
            cursor: pointer;
            text-decoration: none
        }

        a strong {
            color: currentColor
        }

        a:hover {
            color: #363636
        }

        hr {
            background-color: #f5f5f5;
            border: none;
            display: block;
            height: 2px;
            margin: 1.5rem 0
        }

        img {
            height: auto;
            max-width: 100%
        }

        small {
            font-size: .875em
        }

        span {
            font-style: inherit;
            font-weight: inherit
        }

        .container {
            flex-grow: 1;
            margin: 0 auto;
            position: relative;
            width: auto
        }

        .container.is-fluid {
            max-width: none !important;
            padding-left: 32px;
            padding-right: 32px;
            width: 100%
        }

        @media screen and (min-width:1024px) {
            .container {
                max-width: 960px
            }
        }

        @media screen and (max-width:1215px) {
            .container.is-widescreen:not(.is-max-desktop) {
                max-width: 1152px
            }
        }

        @media screen and (max-width:1407px) {
            .container.is-fullhd:not(.is-max-desktop):not(.is-max-widescreen) {
                max-width: 1344px
            }
        }

        @media screen and (min-width:1216px) {
            .container:not(.is-max-desktop) {
                max-width: 1152px
            }
        }

        @media screen and (min-width:1408px) {
            .container:not(.is-max-desktop):not(.is-max-widescreen) {
                max-width: 1344px
            }
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .mr-0 {
            margin-right: 0 !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .ml-0 {
            margin-left: 0 !important
        }

        .mx-0 {
            margin-left: 0 !important;
            margin-right: 0 !important
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1 {
            margin-top: .25rem !important
        }

        .mr-1 {
            margin-right: .25rem !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .ml-1 {
            margin-left: .25rem !important
        }

        .mx-1 {
            margin-left: .25rem !important;
            margin-right: .25rem !important
        }

        .my-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mr-2 {
            margin-right: .5rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .ml-2 {
            margin-left: .5rem !important
        }

        .mx-2 {
            margin-left: .5rem !important;
            margin-right: .5rem !important
        }

        .my-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .m-3 {
            margin: .75rem !important
        }

        .mt-3 {
            margin-top: .75rem !important
        }

        .mr-3 {
            margin-right: .75rem !important
        }

        .mb-3 {
            margin-bottom: .75rem !important
        }

        .ml-3 {
            margin-left: .75rem !important
        }

        .mx-3 {
            margin-left: .75rem !important;
            margin-right: .75rem !important
        }

        .my-3 {
            margin-top: .75rem !important;
            margin-bottom: .75rem !important
        }

        .m-4 {
            margin: 1rem !important
        }

        .mt-4 {
            margin-top: 1rem !important
        }

        .mr-4 {
            margin-right: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1rem !important
        }

        .ml-4 {
            margin-left: 1rem !important
        }

        .mx-4 {
            margin-left: 1rem !important;
            margin-right: 1rem !important
        }

        .my-4 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .m-5 {
            margin: 1.5rem !important
        }

        .mt-5 {
            margin-top: 1.5rem !important
        }

        .mr-5 {
            margin-right: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 1.5rem !important
        }

        .ml-5 {
            margin-left: 1.5rem !important
        }

        .mx-5 {
            margin-left: 1.5rem !important;
            margin-right: 1.5rem !important
        }

        .my-5 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .m-6 {
            margin: 3rem !important
        }

        .mt-6 {
            margin-top: 3rem !important
        }

        .mr-6 {
            margin-right: 3rem !important
        }

        .mb-6 {
            margin-bottom: 3rem !important
        }

        .ml-6 {
            margin-left: 3rem !important
        }

        .mx-6 {
            margin-left: 3rem !important;
            margin-right: 3rem !important
        }

        .my-6 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0 {
            padding-top: 0 !important
        }

        .pr-0 {
            padding-right: 0 !important
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .pl-0 {
            padding-left: 0 !important
        }

        .px-0 {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1 {
            padding-top: .25rem !important
        }

        .pr-1 {
            padding-right: .25rem !important
        }

        .pb-1 {
            padding-bottom: .25rem !important
        }

        .pl-1 {
            padding-left: .25rem !important
        }

        .px-1 {
            padding-left: .25rem !important;
            padding-right: .25rem !important
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2 {
            padding-top: .5rem !important
        }

        .pr-2 {
            padding-right: .5rem !important
        }

        .pb-2 {
            padding-bottom: .5rem !important
        }

        .pl-2 {
            padding-left: .5rem !important
        }

        .px-2 {
            padding-left: .5rem !important;
            padding-right: .5rem !important
        }

        .py-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .p-3 {
            padding: .75rem !important
        }

        .pt-3 {
            padding-top: .75rem !important
        }

        .pr-3 {
            padding-right: .75rem !important
        }

        .pb-3 {
            padding-bottom: .75rem !important
        }

        .pl-3 {
            padding-left: .75rem !important
        }

        .px-3 {
            padding-left: .75rem !important;
            padding-right: .75rem !important
        }

        .py-3 {
            padding-top: .75rem !important;
            padding-bottom: .75rem !important
        }

        .p-4 {
            padding: 1rem !important
        }

        .pt-4 {
            padding-top: 1rem !important
        }

        .pr-4 {
            padding-right: 1rem !important
        }

        .pb-4 {
            padding-bottom: 1rem !important
        }

        .pl-4 {
            padding-left: 1rem !important
        }

        .px-4 {
            padding-left: 1rem !important;
            padding-right: 1rem !important
        }

        .py-4 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .p-5 {
            padding: 1.5rem !important
        }

        .pt-5 {
            padding-top: 1.5rem !important
        }

        .pr-5 {
            padding-right: 1.5rem !important
        }

        .pb-5 {
            padding-bottom: 1.5rem !important
        }

        .pl-5 {
            padding-left: 1.5rem !important
        }

        .px-5 {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important
        }

        .py-5 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .p-6 {
            padding: 3rem !important
        }

        .pt-6 {
            padding-top: 3rem !important
        }

        .pr-6 {
            padding-right: 3rem !important
        }

        .pb-6 {
            padding-bottom: 3rem !important
        }

        .pl-6 {
            padding-left: 3rem !important
        }

        .px-6 {
            padding-left: 3rem !important;
            padding-right: 3rem !important
        }

        .py-6 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .has-text-centered {
            text-align: center !important
        }

        .has-text-justified {
            text-align: justify !important
        }

        .has-text-left {
            text-align: left !important
        }

        .has-text-right {
            text-align: right !important
        }

        .is-capitalized {
            text-transform: capitalize !important
        }

        .is-lowercase {
            text-transform: lowercase !important
        }

        .is-uppercase {
            text-transform: uppercase !important
        }

        .is-italic {
            font-style: italic !important
        }

        .is-block {
            display: block !important
        }

        .is-hidden {
            display: none !important
        }

        footer {
            background-color: #fafafa;
            padding: 3rem 1.5rem 6rem
        }

        @media screen and (max-width:1023px) {
            .is-hidden-touch {
                display: none !important
            }
        }

        @media screen and (min-width:1024px) {
            .is-hidden-desktop {
                display: none !important
            }
        }

        @media screen and (min-width:769px),
        print {
            .is-hidden-tablet {
                display: none !important
            }
        }

        @media screen and (max-width:768px) {
            .is-hidden-mobile {
                display: none !important
            }
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!--Common CSS-->
    <link rel="stylesheet" href="slider.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://theblueprint.asia/media/css/all-custom.css?1.3.1"> -->
    <link rel="stylesheet" type="text/css" href="https://theblueprint.asia/media/css/all-responsive.css?1.3.1">
    <!--End Common CSS-->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Real Estate Creative Agency in Mumbai - TheBlueprintAsia</title>





    <!-- Google Analytics Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- End Google Analytics Code -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 575px)" href="https://theblueprint.asia/media/css/full-page-scroll.css">

    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            /* Adjust overlay transparency */
            z-index: 1;
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
    </style>
</head>

<body>


    <header class="main-header" style="background: rgb(55 63 65 / 38%);">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!-- Top Left -->
                    <div class="top-left" style="display: flex; gap: 60px;">
                        <div class="text">
                            NSE &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-down" style="color: #FA4318;"></i>&nbsp;&nbsp; ₹ 2,929.65 (-1.89%)
                        </div>

                        <div class="text">
                            BSE &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-down" style="color: #FA4318;"></i>&nbsp;&nbsp; ₹ 2,929.85 (-1.92% )
                        </div>
                    </div>



                    <!-- Top Right -->
                    <div class="top-right pull-right" style="display: flex; gap: 40px;">





                        <a href="">
                            <label class="mt-3" style="color: white;"> Fraud Alert</label>
                        </a>

                        <a href="contact.php">
                            <label class="mt-3" style="color: white;"> Contact Us</label>
                        </a>



                        <!-- <div class="clock">We'are Open: Mon - Sat 8:00 - 18:00</div>
                        <div class="social-box">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-dribbble"></a>
                            <a href="#" class="fa fa-behance"></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>


        <!-- <hr style="border: 1px solid white;"> -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo">
                            <a href="index.php"><img src="img/frpl logo-2.png" style="width: 120px;" alt="" title=""></a>
                        </div>
                    </div>

                    <div class="pull-right upper-right clearfix">
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box">
                                <span class="flaticon-telephone"></span>
                            </div>
                            <ul>
                                <li><strong>Call Us for help!</strong></li>
                                <li>+ (888) 452 1505</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box">
                                <span class="flaticon-placeholder"></span>
                            </div>
                            <ul>
                                <li><strong>+ (888) 452 1505</strong></li>
                                <li>30 Commercial Road, Australia</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box">
                                <span class="flaticon-message"></span>
                            </div>
                            <ul>
                                <li><strong>Mail Us</strong></li>
                                <li>help@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Upper -->

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var dropdown = document.querySelector('.dropdown');
                var menu = document.querySelector('.dropdown-menu');

                dropdown.addEventListener('click', function() {
                    // Toggle the dropdown menu visibility with animation
                    if (menu.style.display === 'block') {
                        menu.style.opacity = '0';
                        menu.style.transform = 'translateY(10px)';
                        setTimeout(function() {
                            menu.style.display = 'none';
                        }, 300); // Match the transition duration
                    } else {
                        menu.style.display = 'block';
                        setTimeout(function() {
                            menu.style.opacity = '1';
                            menu.style.transform = 'translateY(0)';
                        }, 10); // Small delay to trigger the transition
                    }
                });
            });
        </script>


        <!-- Header Upper -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="nav-outer">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler">
                            <span class="icon flaticon-menu-3"></span>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div
                                class="navbar-collapse collapse clearfix"
                                id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li>
                                        <a href="index.php">Home</a>

                                    </li>
                                    <li>
                                        <a href="about.php">About Us</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="oil-gas.html"> Recycle Refiners</a></li>
                                            <li>
                                                <a href="mechanical-engineering.html">Importer</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="product.php">Product</a>
                                       
                                    </li>
                                    <!-- <li class="dropdown">
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                            <li><a href="not-found.html">Not Found</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>


                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title="">
                        <img src="img/frpl logo-2.png" style="height: 8vh;" alt="" title="">
                    </a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler">
                        <span class="icon flaticon-menu-3"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-close"></span></div>

            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="index.html"><img src="images/logo.png" alt="" title="" /></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>





    <div id="main" class="scroll-container for-desktop">

        <section id="section-banner" class="section section-banner theme-bg-section theme-padding">
            <div class="theme-bg-img">
                <picture>
                    <source media="(max-width:400px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:400px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:600px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:600px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:1000px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:1000px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:1350px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/png">
                    <source media="(max-width:1350px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/jpeg">
                    <source srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" type="image/webp">
                    <source srcset="https://theblueprint.asia/media/images/home/banner/banner-bg-update.png" type="image/png">
                    <img class="bg-img" src="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.png" width="1920" height="880" alt="Banner" />
                </picture>
            </div>
            <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                <div class="section-title">
                    <h1>Base Oil</h1>
                    <p class="is-hidden-mobile">" We are engaged in supplying Base Oil, which is light in color and have high viscosity & good solubility characteristics. is used for making lubricants for transformers, hydraulics and other purposes. Our high quality range of Base oil is imported from other countries. "</p>
                </div>
            </div>
        </section>

        <section id="section-meet-conversions" class="section section-meet-conversions theme-bg-section theme-padding">
            <div class="theme-bg-img">
                <div class="meet-conversions-img-detail">
                    <div class="columns is-multiline is-mobile is-gapless meet-conversions-cols">
                        <div class="column is-3-mobile is-3-tablet is-3-desktop is-3-widescreen meet-conversions-col">
                            <div class="meet-conversions-img">
                                <picture>
                                    <source srcset="img/large-oil-rig-is-water-with-nigh.jpg" type="image/webp">
                                    <source srcset="img/large-oil-rig-is-water-with-nigh.jpg" type="image/jpg">
                                    <img src="img/large-oil-rig-is-water-with-nigh.jpg" width="480" height="800" alt="Meet Conversions" />
                                </picture>
                            </div>
                        </div>
                        <div class="column is-3-mobile is-3-tablet is-3-desktop is-3-widescreen meet-conversions-col">
                            <div class="meet-conversions-img">
                                <picture>
                                    <source srcset="img/modern-factory-industrial-zone-blue-sky.jpg" type="image/webp">
                                    <source srcset="img/modern-factory-industrial-zone-blue-sky.jpg" type="image/jpg">
                                    <img src="img/modern-factory-industrial-zone-blue-sky.jpg" width="480" height="800" alt="Meet Conversions" />
                                </picture>
                            </div>
                        </div>
                        <div class="column is-3-mobile is-3-tablet is-3-desktop is-3-widescreen meet-conversions-col">
                            <div class="meet-conversions-img">
                                <picture>
                                    <source srcset="img/environmental-pollution-factory.jpg" type="image/webp">
                                    <source srcset="img/environmental-pollution-factory.jpg" type="image/jpg">
                                    <img src="img/environmental-pollution-factory.jpg" width="480" height="800" alt="Meet Conversions" />
                                </picture>
                            </div>
                        </div>
                        <div class="column is-3-mobile is-3-tablet is-3-desktop is-3-widescreen meet-conversions-col">
                            <div class="meet-conversions-img">
                                <picture>
                                    <source srcset="img/oil-refinery-petroleum-refinery-industrial-process-plant-crude-oil-transformed-refined_308548-3135.jpg" type="image/webp">
                                    <source srcset="img/oil-refinery-petroleum-refinery-industrial-process-plant-crude-oil-transformed-refined_308548-3135.jpg" type="image/jpg">
                                    <img src="img/oil-refinery-petroleum-refinery-industrial-process-plant-crude-oil-transformed-refined_308548-3135.jpg" width="480" height="800" alt="Meet Conversions" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                <div class="section-title mb-4">
                    <h2>Furnace Oil</h2>
                    <p>Furnace oil, also known as fuel oil, is a heavy, viscous liquid derived from crude oil during the refining process. It is primarily used in industrial furnaces, boilers, and marine engines as a fuel source for generating heat and energy. Furnace oil is classified under residual fuels, meaning it is the byproduct left after the lighter fractions, such as gasoline and diesel, have been distilled from crude oil.</p>
                </div>

            </div>
        </section>



        <section id="section-home-project-casestudy" class="section section-home-project-casestudy theme-bg-section theme-padding">
            <div class="theme-bg-img img-position-top">
                <picture>
                    <source media="(max-width:400px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/webp">
                    <source media="(max-width:400px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/jpeg">
                    <source media="(max-width:600px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/webp">
                    <source media="(max-width:600px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/jpeg">
                    <source media="(max-width:1000px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/webp">
                    <source media="(max-width:1000px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/jpeg">
                    <source media="(max-width:1350px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/webp">
                    <source media="(max-width:1350px)" srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" type="image/jpeg">
                    <source srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg">
                    <source srcset="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg">
                    <img class="bg-img" src="img/pngtree-evening-at-the-oil-refinery-of-business-logistic-sea-going-ship-image_15997346.jpg" width="1920" height="880" alt="Banner" />
                </picture>
            </div>
            <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                <div class="project-casestudy-logo">
                    <picture>
                        <source srcset="img/sec3.jpg" type="image/webp">
                        <source srcset="img/sec3.jpg" type="image/png">
                        <img src="img/sec3.jpg" width="200" height="200" alt="Bhoomi Group" />
                    </picture>
                </div>
                <div class="section-title">
                    <h2>Industrial Light Diesel Oil</h2>
                    <p>Industrial Light Diesel Oil (LDO) is a high-quality, low-viscosity fuel oil, essential in refinery operations where reliable heat and energy are critical. Known for its clean combustion and consistent performance, LDO is used in furnaces, boilers, and diesel generators to ensure efficient and smooth operation of refinery equipment.</p>
                </div>

            </div>
        </section>

        <section id="section-home-project-casestudy" class="section section-home-project-casestudy theme-bg-section theme-padding">
            <div class="theme-bg-img img-position-top">
                <picture>
                    <source media="(max-width:400px)" srcset="img/service-impoter.jpg" type="image/webp">
                    <source media="(max-width:400px)" srcset="img/service-impoter.jpg" type="image/jpeg">
                    <source media="(max-width:600px)" srcset="img/service-impoter.jpg" type="image/webp">
                    <source media="(max-width:600px)" srcset="img/service-impoter.jpg" type="image/jpeg">
                    <source media="(max-width:1000px)" srcset="img/service-impoter.jpg" type="image/webp">
                    <source media="(max-width:1000px)" srcset="img/service-impoter.jpg" type="image/jpeg">
                    <source media="(max-width:1350px)" srcset="img/service-impoter.jpg" type="image/webp">
                    <source media="(max-width:1350px)" srcset="img/service-impoter.jpg" type="image/jpeg">
                    <source srcset="img/service-impoter.jpg" type="image/webp">
                    <source srcset="img/service-impoter.jpg" type="image/jpg">
                    <img class="bg-img" src="img/service-impoter.jpg" width="1920" height="880" alt="Banner" />
                </picture>
            </div>
            <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                <div class="project-casestudy-logo">
                    <picture>
                        <source srcset="img/service-impoter.jpg" type="image/webp">
                        <source srcset="img/service-impoter.jpg" type="image/png">
                        <img src="img/service-impoter.jpg" width="200" height="200" alt="Hiranandani Developers" />
                    </picture>
                </div>
                <div class="section-title">
                    <h2>Low Aromatic</h2>
                    <p>Low Aromatic refers to hydrocarbons that contain a lower concentration of aromatic compounds, which are chemical compounds featuring one or more benzene rings in their structure. These low aromatic solvents are often used in industries such as refineries for various reasons, including their reduced environmental and health impacts compared to high-aromatic solvents.</p>
                </div>
                
            </div>
        </section>

        <section id="section-home-project-casestudy" class="section section-home-project-casestudy theme-bg-section theme-padding">
            <div class="theme-bg-img img-position-top">
                <picture>

                    <source media="(max-width:1000px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/webp">
                    <source media="(max-width:1000px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpeg">
                    <source media="(max-width:1350px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/webp">
                    <source media="(max-width:1350px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpeg">
                    <source srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/webp">
                    <source srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                    <img class="bg-img" src="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" width="1920" height="880" alt="Banner" />
                </picture>
            </div>
            <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                <div class="project-casestudy-logo">
                    <picture>
                        <source srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/webp">
                        <source srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/png">
                        <img src="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" width="200" height="200" alt="Paradigm Realty" />
                    </picture>
                </div>
                <div class="section-title">
                    <h2>Petroleum Products</h2>
                    <p>Petroleum products are materials derived from crude oil (petroleum) as it is processed in oil refineries. These products can be broadly classified into fuels, lubricants, and chemicals used in various industries. They play a vital role in modern life, powering transportation, heating, and industrial operations.</p>
                </div>
               
            </div>
        </section>



    </div>


  


    <script src="https://theblueprint.asia/media/js/full-page-scroll.js"></script>

    <script type="text/javascript">
        const mediaQuery = window.matchMedia('(min-width: 575px)')
        if (mediaQuery.matches) {
            new fullScroll({
                mainElement: "main",
                displayDots: true,
                dotsPosition: "left",
                animateTime: 0.9,
                animateFunction: "ease",
                lockAnchors: true,
            });
        }
    </script>







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
</body>



</html>