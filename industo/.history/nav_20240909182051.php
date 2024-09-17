<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
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
    </style>
</head>

<body>
    <!-- <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="">
                       
                    </div>
                    <div class="txt-loading">
                        <span data-text-preloader="F" class="letters-loading"> F </span>
                        <span data-text-preloader="R" class="letters-loading"> R </span>
                        <span data-text-preloader="P" class="letters-loading"> P </span>
                        <span data-text-preloader="L" class="letters-loading"> L </span>
                        <h5 style="color: white;">Fine Refiners Pvt. Ltd.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader End -->

    <!-- Vertical Lines Start -->
    <!-- <div class="vertical-lines-wrapper">
        <div class="vertical-lines">
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
            <div class="vertical-effect"></div>
        </div>
    </div> -->
    <!-- End Vertical Lines Start -->

    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg
            class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102">
            <path
                d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
              transition: stroke-dashoffset 10ms linear 0s;
              stroke-dasharray: 307.919px, 307.919px;
              stroke-dashoffset: 228.265px;
            "></path>
        </svg>
    </div>
    <!-- scrollToTop end -->

    <!-- Main Header-->
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

                        <a href="">
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
                            <a href="index.html"><img src="img/frpl logo-2.png" style="width: 120px;" alt="" title=""></a>
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
                                        <a href="#">Home</a>

                                    </li>
                                    <li>
                                        <a href="about.php">About Us</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <!-- <li><a href="services.html">Services</a></li> -->
                                            <li><a href="oil-gas.html"> Recycle Refiners</a></li>
                                            <li>
                                                <a href="mechanical-engineering.html">Importer</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li >
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

</body>

</html>