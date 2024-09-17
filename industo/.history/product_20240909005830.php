<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Industo Industry HTML-5 Template | Project's</title>
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
    <link rel=preload href="https://theblueprint.asia/media/fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="stylesheet" href="slider.css">

    <!--Common CSS-->
    <link rel="stylesheet" type="text/css" href="https://theblueprint.asia/media/css/all-custom.css?1.3.1">
    <link rel="stylesheet" type="text/css" href="https://theblueprint.asia/media/css/all-responsive.css?1.3.1">

    <link rel="stylesheet" type="text/css" media="screen and (min-width: 575px)" href="https://theblueprint.asia/media/css/full-page-scroll.css">

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




    </div>
    <!-- End Page Wrapper -->

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
    <script src="js/mixitup.js"></script>
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