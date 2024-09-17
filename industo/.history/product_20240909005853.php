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

        <div id="main" class="scroll-container for-desktop">

            <section id="section-banner" class="section section-banner theme-bg-section theme-padding">
                <div class="theme-bg-img">
                    <picture>
                        <source media="(max-width:400px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:400px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:600px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:600px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:1000px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:1000px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:1350px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpg">
                        <source media="(max-width:1350px)" srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/jpeg">
                        <source srcset="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" type="image/webp">
                        <source srcset="https://theblueprint.asia/media/images/home/banner/banner-bg-update.jpg" type="image/jpg">
                        <img class="bg-img" src="img/industry-pipeline-transport-petrochemical-gas-oil-processing-furnace-factory-line-rack-heat-chemical-manufacturing-equipment-steel-pipes-plant-with-generative-ai_875746-16358.jpg" width="1920" height="880" alt="Banner" />
                    </picture>
                </div>
                <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                    <div class="section-title">
                        <h1>Turning Blueprints into Masterpieces - Where Real Estate Meets Creative Genius.</h1>
                        <p class="is-hidden-mobile">"We craft compelling stories; your homes won't just be seen - they'll be sold."</p>
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
                        <h2>Where Creativity Meets Conversions.</h2>
                        <p>Our left-brain creativity triggers all the right moves in your sales funnel.</p>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/our-portfolio/">
                        <span>Explore</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
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
                        <h2>#LimitlessYou</h2>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/projects/bhoomi-group/">
                        <span>View Full Casestudy</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
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
                        <h2>Pride Of Ownership</h2>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/projects/hiranandani-developers/">
                        <span>View Full Casestudy</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
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
                        <h2>Mumbai's Only Global Living Destination</h2>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/projects/paradigm-realty/">
                        <span>View Full Casestudy</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </section>

            <section id="section-home-project-casestudy" class="section section-home-project-casestudy theme-bg-section theme-padding">
                <div class="theme-bg-img img-position-top">
                    <picture>

                        <source media="(max-width:1350px)" srcset="img/large-oil-rig-is-water-with-nigh.jpg" type="image/webp">
                        <source media="(max-width:1350px)" srcset="img/large-oil-rig-is-water-with-nigh.jpg" type="image/jpeg">
                        <source srcset="img/large-oil-rig-is-water-with-nigh.jpg">
                        <source srcset="img/large-oil-rig-is-water-with-nigh.jpg">
                        <img class="bg-img" src="img/large-oil-rig-is-water-with-nigh.jpg" width="1920" height="880" alt="Banner" />
                    </picture>
                </div>
                <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                    <div class="project-casestudy-logo">
                        <picture>
                            <source srcset="img/large-oil-rig-is-water-with-nigh.jpg" type="image/webp">
                            <source srcset="img/large-oil-rig-is-water-with-nigh.jpg" type="image/png">
                            <img src="img/large-oil-rig-is-water-with-nigh.jpg" width="200" height="200" alt="Raunak Group" />
                        </picture>
                    </div>
                    <div class="section-title">
                        <h2>#TheSignatureCollection</h2>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/projects/raunak-group/">
                        <span>View Full Casestudy</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </section>

            <section id="section-home-project-casestudy" class="section section-home-project-casestudy theme-bg-section theme-padding">
                <div class="theme-bg-img img-position-top">
                    <picture>
                        <source media="(max-width:400px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-xs.webp" type="image/webp">
                        <source media="(max-width:400px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-xs.jpg" type="image/jpeg">
                        <source media="(max-width:600px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-sm.webp" type="image/webp">
                        <source media="(max-width:600px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-sm.jpg" type="image/jpeg">
                        <source media="(max-width:1000px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-md.webp" type="image/webp">
                        <source media="(max-width:1000px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-md.jpg" type="image/jpeg">
                        <source media="(max-width:1350px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-lg.webp" type="image/webp">
                        <source media="(max-width:1350px)" srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner-lg.jpg" type="image/jpeg">
                        <source srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner.webp" type="image/webp">
                        <source srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner.jpg" type="image/jpg">
                        <img class="bg-img" src="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva-banner.jpg" width="1920" height="880" alt="Banner" />
                    </picture>
                </div>
                <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                    <div class="project-casestudy-logo">
                        <picture>
                            <source srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva.webp" type="image/webp">
                            <source srcset="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva.png" type="image/png">
                            <img src="https://theblueprint.asia/media/images/home/project-casestudy/lokhandwala-minerva/lokhandwala-minerva.png" width="200" height="200" alt="Lokhandwala Minerva" />
                        </picture>
                    </div>
                    <div class="section-title">
                        <h2>What's Common Between The Both?</h2>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/projects/lokhandwala-minerva/">
                        <span>View Full Casestudy</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </section>

            <section id="section-home-about-us" class="section section-home-about-us theme-bg-section theme-padding scale-element-">
                <div class="theme-bg-img">
                    <picture>
                        <source media="(max-width:400px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-xs-16-12.webp" type="image/webp">
                        <source media="(max-width:400px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-xs-16-12.jpg" type="image/jpeg">
                        <source media="(max-width:600px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-sm-16-12.webp" type="image/webp">
                        <source media="(max-width:600px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-sm-16-12.jpg" type="image/jpeg">
                        <source media="(max-width:1000px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-md-16-12.webp" type="image/webp">
                        <source media="(max-width:1000px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-md-16-12.jpg" type="image/jpeg">
                        <source media="(max-width:1350px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-lg-16-12.webp" type="image/webp">
                        <source media="(max-width:1350px)" srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-lg-16-12.jpg" type="image/jpeg">
                        <source srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-16-12.webp" type="image/webp">
                        <source srcset="https://theblueprint.asia/media/images/home/about-us/about-us-bg-16-12.jpg" type="image/jpg">
                        <img class="bg-img" src="https://theblueprint.asia/media/images/home/about-us/about-us-bg-16-12.jpg" width="1920" height="880" alt="Banner" />
                    </picture>
                </div>
                <div class="theme-banner-text dark js-scroll fade-in-bottom scrolled">
                    <div class="section-title mb-4">
                        <h2>Think Creative, Sell Faster - That's The Blueprint philosophy.</h2>
                        <p>Like every structure starts with a blueprint, every brand starts with an idea. We translate your ideas into awe-inspiring designs, campaigns, and digital landscapes. The result? Campaigns that not only capture imagination but also close deals.</p>
                    </div>
                    <a class="know-more-btn dark" href="https://theblueprint.asia/about-us/">
                        <span>Know More</span>
                        <div class="know-more-btn-icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1914 22.333L27.6669 14.8576L20.1914 7.3821" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M26.4998 14.8095L1.99984 14.8095" stroke="#2B2A29" stroke-width="2" stroke-miterlimit="10">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </section>

            <section id="section-footer" class="section section-footer theme-bg-section scale-element- pb-0 pt-0">
                <div class="footer-img">
                    <picture>
                        <source media="(max-width:575px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-sm.webp" type="image/webp">
                        <source media="(max-width:575px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-sm.jpg" type="image/jpeg">
                        <source media="(max-width:1000px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-md.webp" type="image/webp">
                        <source media="(max-width:1000px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-md.jpg" type="image/jpeg">
                        <source media="(max-width:1350px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-lg.webp" type="image/webp">
                        <source media="(max-width:1350px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-lg.jpg" type="image/jpeg">
                        <source media="(max-width:1599px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-1599.webp" type="image/webp">
                        <source media="(max-width:1599px)" srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1-1599.jpg" type="image/jpeg">
                        <source srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1.webp" type="image/webp">
                        <source srcset="https://theblueprint.asia/media/images/footer/footer-bg-10-1.jpg" type="image/jpg">
                        <img src="https://theblueprint.asia/media/images/footer/footer-bg-10-1.jpg" width="1920" height="880" alt="Banner" />
                    </picture>
                </div>

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