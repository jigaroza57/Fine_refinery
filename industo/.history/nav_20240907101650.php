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

        /* Apply transparent background */
        .header-top, .header-upper, .header-lower, .sticky-header, .mobile-menu {
            background-color: transparent;
        }

        .main-header .header-upper{
            background: ;
        }
        
    </style>
</head>

<body>
    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
        </svg>
    </div>
    <!-- scrollToTop end -->

    <!-- Main Header-->
    <header class="main-header">
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
                        <div class="dropdown">
                            <label class="mt-3 rogg" style="color: white; cursor: pointer;">
                                eB2B <i class="fas fa-chevron-down"></i>
                            </label>
                            <ul class="dropdown-menu" style="z-index: 2;">
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">Option 2</a></li>
                                <li><a href="#">Option 3</a></li>
                            </ul>
                        </div>

                        <a href="">
                            <label class="mt-3"> Fraud Alert</label>
                        </a>

                        <a href="">
                            <label class="mt-3" style="color: white;">  Contact Us</label>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left logo-box">
                        <div class="logo">
                            <a href="index.html"><img src="img/FRPL logo_nav.png" style="width: 120px;" alt="" title=""></a>
                        </div>
                    </div>

                    <div class="pull-right upper-right clearfix">
                        <div class="upper-column info-box">
                            <div class="icon-box">
                                <span class="flaticon-telephone"></span>
                            </div>
                            <ul>
                                <li><strong>Call Us for help!</strong></li>
                                <li>+ (888) 452 1505</li>
                            </ul>
                        </div>

                        <div class="upper-column info-box">
                            <div class="icon-box">
                                <span class="flaticon-placeholder"></span>
                            </div>
                            <ul>
                                <li><strong>+ (888) 452 1505</strong></li>
                                <li>30 Commercial Road, Australia</li>
                            </ul>
                        </div>

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

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="nav-outer">
                        <div class="mobile-nav-toggler">
                            <span class="icon flaticon-menu-3"></span>
                        </div>
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="#">Home</a></li>
                                    <li class="dropdown"><a href="#">About Us</a></li>
                                    <li class="dropdown"><a href="#">Services</a></li>
                                    <li class="dropdown"><a href="#">Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="img/FRPL logo_nav.png" style="height: 8vh;" alt="" title=""></a>
                </div>
                <div class="pull-right">
                    <nav class="main-menu"></nav>
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
