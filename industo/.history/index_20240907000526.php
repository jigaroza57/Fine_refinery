<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Fine Refiners Pvt. Ltd.</title>
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
        
    </style>
</head>

<body>
    <div class="cursor"></div>

    <div class="page-wrapper">
        <!-- Preloader -->

        <!-- End Main Header -->
        <?php include 'nav.php'; ?>

        <!-- Main Slider Section -->
        <section class="main-slider">
            <div class="main-slider-video">
                <!-- Video Background -->
                <video autoplay loop muted playsinline class="video-bg">
                    <source src="img/walkthrough-video.mp4" type="video/mp4" />
                    <!-- You can add additional formats for cross-browser compatibility -->
                    Your browser does not support the video tag.
                </video>

                <div class="overlay"></div> <!-- Optional: to add a semi-transparent overlay -->
                <div class="auto-container">
                    <!-- Content Column -->
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

        <!-- Service Section -->
        <section class="service-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <!-- Service Block -->
                        <div class="service-block col-lg-4 col-md-6 col-sm-12">
                            <div
                                class="inner-box wow fadeInLeft"
                                data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div
                                    class="shape-one"
                                    style="background-image: url(images/icons/shape-1.png)"></div>
                                <div
                                    class="shape-two"
                                    style="background-image: url(images/icons/shape-2.png)"></div>
                                <div
                                    class="image-layer"
                                    style="background-image: url(images/resource/service.jpg)"></div>
                                <div class="icon flaticon-factory"></div>
                                <h5>
                                    <a class="oil-gas.html" href="oil-gas.html">Eco & Bio Power</a>
                                </h5>
                                <div class="text">
                                    Manufacturing industry became a key sector of production and
                                    labour into the European and North America.
                                </div>
                                <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-right-arrow"></span></a>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block col-lg-4 col-md-6 col-sm-12">
                            <div
                                class="inner-box wow fadeInUp"
                                data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div
                                    class="shape-one"
                                    style="background-image: url(images/icons/shape-1.png)"></div>
                                <div
                                    class="shape-two"
                                    style="background-image: url(images/icons/shape-2.png)"></div>
                                <div
                                    class="image-layer"
                                    style="background-image: url(images/resource/service.jpg)"></div>
                                <div class="icon flaticon-fuel-pump"></div>
                                <h5>
                                    <a class="oil-gas.html" href="oil-gas.html">Fuel & Gas Management</a>
                                </h5>
                                <div class="text">
                                    Manufacturing industry became a key sector of production and
                                    labour into the European and North America.
                                </div>
                                <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-right-arrow"></span></a>
                            </div>
                        </div>

                        <!-- Service Block -->
                        <div class="service-block col-lg-4 col-md-6 col-sm-12">
                            <div
                                class="inner-box wow fadeInRight"
                                data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div
                                    class="shape-one"
                                    style="background-image: url(images/icons/shape-1.png)"></div>
                                <div
                                    class="shape-two"
                                    style="background-image: url(images/icons/shape-2.png)"></div>
                                <div
                                    class="image-layer"
                                    style="background-image: url(images/resource/service.jpg)"></div>
                                <div class="icon flaticon-test"></div>
                                <h5>
                                    <a class="oil-gas.html" href="oil-gas.html">Chemical Research</a>
                                </h5>
                                <div class="text">
                                    Manufacturing industry became a key sector of production and
                                    labour into the European and North America.
                                </div>
                                <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="big-text">Assessments</div>
                                <div class="title">About our Company</div>
                                <h2>Building a more competitive business sectors.</h2>
                                <div class="text">
                                    New analytic tools can help manufacturers in labor-intensive
                                    sectors <br />
                                    boost productivity and earnings by double-digit on It is a
                                    secure and <br />
                                    simple on-demand, the total percentages.
                                </div>
                            </div>
                            <div class="row clearfix">
                                <!-- Feature Block -->
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-engineer"></span>
                                        <h5>Strengthening society</h5>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-customer-support"></span>
                                        <h5>Driving the economy</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Lower Box -->
                            <div class="lower-box clearfix">
                                <div class="button-box">
                                    <a class="btn-style-one theme-btn" href="services.html"><span class="txt">About us <i class="arrow fa fa-angle-right"></i></span></a>
                                </div>
                                <div class="phone-box">
                                    <div class="box-inner">
                                        <span class="icon flaticon-telephone"></span>
                                        Call us for help
                                        <strong>12 452 1505</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Counter Box -->
                            <div class="counter-box">
                                <div class="row clearfix">
                                    <!-- Counter Column -->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12">
                                        <h2><span class="odometer" data-count="3010"></span>+</h2>
                                        <div class="counter-text">Satisfied Clients</div>
                                    </div>
                                    <!-- Counter Column -->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12">
                                        <h2><span class="odometer" data-count="528"></span>+</h2>
                                        <div class="counter-text">Active Projects</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <img src="images/resource/about.jpg" alt="" />
                                <div
                                    class="circle-layer"
                                    style="
                      background-image: url(images/resource/about-circle.png);
                    "></div>
                                <span class="gear-icon-one flaticon-gear"></span>
                                <span class="gear-icon-two flaticon-gear"></span>
                            </div>
                        </div>
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
                    <h2>
                        Building a more competitive <br />
                        business sectors.
                    </h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme">
                    <!-- Service Block Two -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/service-1.jpg" alt="" />
                                <div class="overlay-box">
                                    <span class="icon flaticon-drop-of-liquid"></span>
                                    <div class="content">
                                        <h5>Engineering</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-drop-of-liquid"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5>
                                                <a href="oil-gas.html">Eco & Bio Power Services</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="oil-gas.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                <img src="images/resource/service-2.jpg" alt="" />
                                <div class="overlay-box">
                                    <span class="icon flaticon-factory"></span>
                                    <div class="content">
                                        <h5>Engineering</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-factory"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="oil-gas.html">Engineering</a></h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="oil-gas.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Two -->
                    <div class="service-block-two style-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/service-3.jpg" alt="" />
                                <div class="overlay-box">
                                    <span class="icon flaticon-water-control"></span>
                                    <div class="content">
                                        <h5>Engineering</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-water-control"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="oil-gas.html">Plumbing</a></h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="oil-gas.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Two -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/service-1.jpg" alt="" />
                                <div class="overlay-box">
                                    <span class="icon flaticon-drop-of-liquid"></span>
                                    <div class="content">
                                        <h5>Engineering</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-drop-of-liquid"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5>
                                                <a href="oil-gas.html">Eco & Bio Power Services</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="oil-gas.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                <img src="images/resource/service-2.jpg" alt="" />
                                <div class="overlay-box">
                                    <span class="icon flaticon-factory"></span>
                                    <div class="content">
                                        <h5>Engineering</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-factory"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="oil-gas.html">Engineering</a></h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="oil-gas.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Two -->
                    <div class="service-block-two style-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/service-3.jpg" alt="" />
                                <div class="overlay-box">
                                    <span class="icon flaticon-water-control"></span>
                                    <div class="content">
                                        <h5>Engineering</h5>
                                        <div class="title">Services</div>
                                    </div>
                                </div>
                                <div class="overlay-box-two">
                                    <span class="icon-two flaticon-water-control"></span>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h5><a href="oil-gas.html">Plumbing</a></h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="oil-gas.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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

        <!-- Project Section -->
        <section class="project-section">
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
                            <h2>Our Portfolio</h2>
                        </div>
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-building" class="tab-btn active-btn">
                                Building
                            </li>
                            <li data-tab="#prod-industrial" class="tab-btn">Industrial</li>
                            <li data-tab="#prod-architecture" class="tab-btn">
                                Architecture
                            </li>
                            <li data-tab="#prod-construction" class="tab-btn">
                                Construction
                            </li>
                            <li data-tab="#prod-interior" class="tab-btn">
                                Interior Design
                            </li>
                            <li data-tab="#prod-engineer" class="tab-btn">Engineer</li>
                        </ul>
                    </div>

                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!-- Tab / Active Tab -->
                        <div class="tab active-tab" id="prod-building">
                            <div class="image">
                                <img src="images/gallery/1.jpg" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="project-detail.html">City of Calgary LRT Station Refurbishments</a>
                                    </h5>
                                    <div class="category">ALBERTA</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="project-detail.html"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-industrial">
                            <div class="image">
                                <img src="images/gallery/1.jpg" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="project-detail.html">City of Calgary LRT Station Refurbishments</a>
                                    </h5>
                                    <div class="category">ALBERTA</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="project-detail.html"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-architecture">
                            <div class="image">
                                <img src="images/gallery/1.jpg" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="project-detail.html">City of Calgary LRT Station Refurbishments</a>
                                    </h5>
                                    <div class="category">ALBERTA</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="project-detail.html"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-construction">
                            <div class="image">
                                <img src="images/gallery/1.jpg" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="project-detail.html">City of Calgary LRT Station Refurbishments</a>
                                    </h5>
                                    <div class="category">ALBERTA</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="project-detail.html"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-interior">
                            <div class="image">
                                <img src="images/gallery/1.jpg" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="project-detail.html">City of Calgary LRT Station Refurbishments</a>
                                    </h5>
                                    <div class="category">ALBERTA</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="project-detail.html"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab  -->
                        <div class="tab" id="prod-engineer">
                            <div class="image">
                                <img src="images/gallery/1.jpg" alt="" />
                                <div class="content">
                                    <div
                                        class="pattern-layer"
                                        style="background-image: url(images/background/3.jpg)"></div>
                                    <h5>
                                        <a href="project-detail.html">City of Calgary LRT Station Refurbishments</a>
                                    </h5>
                                    <div class="category">ALBERTA</div>
                                    <a
                                        class="arrow flaticon-right-arrow"
                                        href="project-detail.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Project Section -->

        <!-- Products Section -->
        <section class="products-section">
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
                    <div class="big-text">Products</div>
                    <div class="title">Populat products</div>
                    <h2>
                        We have the best quality <br />
                        industrial products.
                    </h2>
                </div>
                <div class="products-carousel owl-carousel owl-theme">
                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/1.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">Impact Drill Machine <br />
                                    Yato Brand</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price">$10.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/2.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">LiIon Compact Drill <br />
                                    Driver</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price">$10.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/3.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">Inverter Power <br />
                                    Generator</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price"><span>$300.00</span>$250.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/4.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">Compound Saw <br />
                                    Makita Brand</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price">$20.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/1.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">Impact Drill Machine <br />
                                    Yato Brand</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price">$10.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/2.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">LiIon Compact Drill <br />
                                    Driver</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price">$10.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/3.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">Inverter Power <br />
                                    Generator</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price"><span>$300.00</span>$250.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block">
                        <div class="inner-box">
                            <div class="color-layer"></div>
                            <div class="image-box">
                                <div class="image">
                                    <a href="oil-gas.html"><img src="images/resource/products/4.png" alt="" /></a>
                                </div>
                            </div>
                            <h5>
                                <a href="oil-gas.html">Compound Saw <br />
                                    Makita Brand</a>
                            </h5>
                            <div class="category">Drill Machine</div>
                            <div class="lower-box clearfix">
                                <div class="pull-left">
                                    <div class="price">$20.00</div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <a class="read-more" href="oil-gas.html">Buy now <span class="flaticon-next-3"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Section -->

        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">
                <div class="sec-title">
                    <div class="big-text">team</div>
                    <div class="title">Expert team member</div>
                    <h2>Our expert team will assist.</h2>
                </div>
                <div class="team-carousel owl-carousel owl-theme">
                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-1.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Rob Miller</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-2.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Alfread Bonaport</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-3.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Alfread Bonaport</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-4.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Alfread Bonaport</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-1.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Rob Miller</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-2.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Alfread Bonaport</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-3.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Alfread Bonaport</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="team-detail.html"><img src="images/resource/team-4.jpg" alt="" /></a>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-dribbble"></a>
                                    <a href="#" class="fa fa-behance"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="gear-icon"></span>
                                <h5><a href="team-detail.html">Alfread Bonaport</a></h5>
                                <div class="designation">Electrical Engineer</div>
                                <div class="middle-content">
                                    <ul class="list">
                                        <li>
                                            <span class="icon flaticon-call-1"></span>+91 120
                                            6777777
                                        </li>
                                        <li>
                                            <span class="icon flaticon-mail"></span>envato@gmail.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box text-center">
                                    <a class="read-more" href="oil-gas.html">Read More <span class="flaticon-next-3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- CTA Section -->
        <section
            class="cta-section"
            style="background-image: url(images/background/4.jpg)">
            <div class="gradient-layer"></div>
            <div
                class="pattern-layer"
                style="background-image: url(images/background/pattern-9.png)"></div>
            <div
                class="pattern-layer-two"
                style="background-image: url(images/background/pattern-10.png)"></div>
            <div class="auto-container">
                <div class="icon">
                    <img src="images/icons/cta-logo.png" alt="" />
                </div>
                <h2>
                    Contact to Expertise in the <br />
                    manufacturing industry
                </h2>
                <div class="button-box text-center">
                    <a class="btn-style-one theme-btn" href="services.html"><span class="txt">Contact us <i class="arrow fa fa-angle-right"></i></span></a>
                </div>
            </div>
        </section>
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
                    <div class="big-text">Blog</div>
                    <div class="title">Latest Blog</div>
                    <h2>Learn something from blog.</h2>
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
                                                <span class="icon flaticon-user-2"></span>by
                                                <span class="theme-color"></span>Admin
                                            </li>
                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>The Chancellor has delivered his Budget ...</h5>
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
                                                <a href="blog-detail.html">The Chancellor has delivered his Budget ...</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                                <span class="icon flaticon-user-2"></span>by
                                                <span class="theme-color"></span>Admin
                                            </li>
                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>Can You Sell A House Before the Probate?</h5>
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
                                                <a href="blog-detail.html">Can You Sell A House Before the Probate?</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                <img src="images/resource/news-3.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li>
                                                <span class="icon flaticon-user-2"></span>by
                                                <span class="theme-color"></span>Admin
                                            </li>
                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>
                                            Key headlines for the best pharmaceutical industry.
                                        </h5>
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
                                                <a href="blog-detail.html">Key headlines for the best pharmaceutical
                                                    industry.</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                                <span class="icon flaticon-user-2"></span>by
                                                <span class="theme-color"></span>Admin
                                            </li>
                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>The Chancellor has delivered his Budget ...</h5>
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
                                                <a href="blog-detail.html">The Chancellor has delivered his Budget ...</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                                <span class="icon flaticon-user-2"></span>by
                                                <span class="theme-color"></span>Admin
                                            </li>
                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>Can You Sell A House Before the Probate?</h5>
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
                                                <a href="blog-detail.html">Can You Sell A House Before the Probate?</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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
                                <img src="images/resource/news-3.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li>
                                                <span class="icon flaticon-user-2"></span>by
                                                <span class="theme-color"></span>Admin
                                            </li>
                                            <li>
                                                <span class="icon flaticon-calendar-2"></span>August
                                                05, 2021 <span class="theme-color"></span>
                                            </li>
                                        </ul>
                                        <h5>
                                            Key headlines for the best pharmaceutical industry.
                                        </h5>
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
                                                <a href="blog-detail.html">Key headlines for the best pharmaceutical
                                                    industry.</a>
                                            </h5>
                                            <div class="text">
                                                The Industrial Revolution, which took place from the
                                                18th to 19th centuries, was a period during predomic.
                                            </div>
                                            <a href="blog-detail.html" class="read-more">Read more <span class="flaticon-next-3"></span></a>
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