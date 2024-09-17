<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <style>
        .shine-effect {
            position: relative;
            display: inline-block;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.2));
            background-size: 200% auto;
            color: white;
            animation: shine 2s linear infinite;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Keyframes for shine animation */
        @keyframes shine {
            0% {
                background-position: 200% center;
            }

            100% {
                background-position: -200% center;
            }
        }

        /* Footer logo shine effect */
        .logo img {
            position: relative;
            overflow: hidden;
            display: inline-block;
            animation: shine-logo 3s linear infinite;
        }

        /* Shine effect for logo */
        @keyframes shine-logo {
            0% {
                filter: brightness(1);
            }

            50% {
                filter: brightness(1.5);
            }

            100% {
                filter: brightness(1);
            }
        }





        .shine-effect {
            position: relative;
            display: inline-block;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.2));
            background-size: 200% auto;
            color: white;
            animation: shine 2s linear infinite;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Keyframes for shine animation */
        @keyframes shine {
            0% {
                background-position: 200% center;
            }

            100% {
                background-position: -200% center;
            }
        }

        /* Footer logo shine effect */
        .logo img {
            position: relative;
            overflow: hidden;
            display: inline-block;
            animation: shine-logo 3s linear infinite;
        }

        /* Shine effect for logo */
        @keyframes shine-logo {
            0% {
                filter: brightness(1);
            }

            50% {
                filter: brightness(1.5);
            }

            100% {
                filter: brightness(1);
            }
        }
    </style>

</head>

<body>
<footer class="main-footer" style="background-image: url(images/background/pattern-12.png);">

<div class="p-5">
    <div class="row">
        <div class="col-md-3">
            <div class="footer-widget logo-widget">
                <div class="logo">
                    <a href="index.html">
                        <img src="img/green_logo.png" style="height: 17vh;" alt="" title="">
                    </a>
                </div>
                <div class="text shine-effect">
                    The company, led by Director Mr. Amin R. Vasaya, draws on over a decade of experience in oil
                    recycling. Mr. Vasaya’s extensive expertise in handling used and waste oils guides the
                    company's operations.
                </div>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-2">
            <div class="footer-widget newsletter-widget">
                <h4 class="shine-effect">Useful Links</h4>

                <div class="text">
                    <a href="index.php" class="shine-effect">
                        <p style="color: white;">Home</p>
                    </a>
                    <a href="about.php" class="shine-effect">
                        <p style="color: white;">About Us</p>
                    </a>
                    <a href="service.php" class="shine-effect">
                        <p style="color: white;">Services</p>
                    </a>
                    <a href="product.php" class="shine-effect">
                        <p style="color: white;">Product</p>
                    </a>
                    <a href="contact.php" class="shine-effect">
                        <p style="color: white;">Contact us</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-1" style="max-width: 3.333333%;"></div>

        <div class="col-md-2">
            <div class="footer-widget newsletter-widget">
                <h4 class="shine-effect">Investors</h4>

                <div class="text">
                    <a href="" class="shine-effect">
                        <p style="color: white;">Financial Reporting</p>
                    </a>
                    <a href="" class="shine-effect">
                        <p style="color: white;">Shares</p>
                    </a>
                    <a href="" class="shine-effect">
                        <p style="color: white;">Shareholders' Information</p>
                    </a>
                    <a href="" class="shine-effect">
                        <p style="color: white;">Resource Centre</p>
                    </a>
                    <a href="" class="shine-effect">
                        <p style="color: white;">Fraud Alert</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="footer-widget newsletter-widget">
                <h4 class="shine-effect">Get In Touch</h4>

                <a href="" style="display: flex; gap: 20px;">
                    <i class="fa-solid fa-location-dot" style="font-size: 25px; color: #19AC5C;"></i>

                    <p class="shine-effect" style="color: white;">
                        105. Aangi Arcade, Opp. Jawahar Ground Atabhai Rode , Bhavnagar - 364002 Gujrat - India
                    </p>
                </a>

                <a class="mt-2" href="+91 +91 9825209230" style="display: flex; gap: 20px; color: #19AC5C;">
                    <i class="fa-solid fa-phone" style="font-size: 25px;"></i>
                    <p class="shine-effect" style="color: white;">+91 9825209230</p>
                </a>

                <a class="mt-2" href="+91 +91 9825209230" style="display: flex; gap: 20px;">
                    <i class="fa-solid fa-envelope" style="font-size: 25px; color: #19AC5C;"></i>
                    <p class="shine-effect" style="color: white;">finerefiner72@gmail.com</p>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="copyright shine-effect">
        &copy; 2024 Fine Refiners Private Limited - All rights reserved. <br> &nbsp;&nbsp;&nbsp; Designed By
        <a href="https://www.apexsoftwarehouse.com/">Apex Software House</a>
    </div>
</div>

</footer>


    <div class="search-popup">
        <button class="close-search style-two">
            <span class="fa fa-remove"></span>
        </button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form
            method="post"
            action="https://html.themexriver.com/industo/blog.html">
            <div class="form-group">
                <input
                    type="search"
                    name="search-field"
                    value=""
                    placeholder="Search Here"
                    required="" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
</body>

</html>