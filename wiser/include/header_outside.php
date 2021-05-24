<!doctype html>
<html class="no-js" lang="zxx" style="overflow-x: hidden !important;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GIST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="wiser/img/logos/title.jpg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="wiser/css/bootstrap.min.css">
    <link rel="stylesheet" href="wiser/css/owl.carousel.min.css">
    <link rel="stylesheet" href="wiser/css/magnific-popup.css">
    <link rel="stylesheet" href="wiser/css/font-awesome.min.css">
    <link rel="stylesheet" href="wiser/css/themify-icons.css">
    <link rel="stylesheet" href="wiser/css/nice-select.css">
    <link rel="stylesheet" href="wiser/css/flaticon.css">
    <link rel="stylesheet" href="wiser/css/gijgo.css">
    <link rel="stylesheet" href="wiser/css/animate.css">
    <link rel="stylesheet" href="wiser/css/slicknav.css">
    <link rel="stylesheet" href="wiser/css/style.css">
    <link rel="stylesheet" type="text/css" href="wiser/glide/dist/css/glide.core.css">
    <link rel="stylesheet" type="text/css" href="wiser/glide/dist/css/glide.theme.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="wiser/css/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body style="overflow-x: hidden !important;">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span>+91 8959883069</span>&emsp;<span>info@smart.com</span></p>
                                </div>
                                <div class="socail_links text-light">


                                    <a href="https://www.facebook.com/profile.php?id=2054869864817911&ref=br_tf&epa=SEARCH_BOX" class="text-light">
                                        <i class="ti-facebook mr-5"></i>
                                    </a>


                                    <a href="https://twitter.com/AcademyGist" class="text-light">
                                        <i class="fab fa-twitter mr-5 "></i>
                                    </a>


                                    <a href="https://wa.me/+919630031012?text=I'm%20interested%20in%20your%20Institute%20will%20you%20accept%20my%20request" class="text-light ">
                                        <i class="fab fa-whatsapp mr-5"></i>
                                    </a>


                                    <a href="#" class="text-light">
                                        <i class="fab fa-linkedin"></i>
                                    </a>


                                </div>
                                <!-- <div class="text_wrap">
                                    <p><a href="#"> <i class="ti-user"></i>  Login</a> <a href="#">Register</a></p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.php">
                                            <?php
                                            // Dynamic Logo
                                            include("examples/classes/logo/class.logo.php");
                                            $logo = new LogoMaker;
                                            $logo = $logo->fetchall();
                                            $row = mysqli_fetch_array($logo);
                                            // Dynamic Logo
                                            ?>
                                            <!-- <img src="img/logos/logo_transparent.png" alt=""> -->
                                            <img class="animate__animated animate__fadeInUp" src="assets/img/<?= $row['img']; ?>" style="width:115px;">

                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav class="">
                                            <ul id="navigation">
                                                <li><a href="index.php">home</a></li>
                                                <li><a href="wiser/about.php">About Us</a></li>
                                                <!-- <li><a href="Courses.php">Courses</a></li> -->
                                                <li><a href="#">Courses<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="wiser/Courses.php">Courses</a></li>
                                                        <li><a href="wiser/onlineClass.php">Online Classes</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li><a href="blog.php">blog <i class=""></i></a> -->
                                                    <!-- <ul class="submenu">
                                                        <li><a href="blog.php">blog</a></li>
                                                        <li><a href="single-blog.php">single-blog</a></li>
                                                    </ul> -->
                                                </li>
                                                <li><a href="wiser/events.php">Event</a>
                                                    <ul class="submenu">
                                                        <li><a href="wiser/events.php">Event</a></li>
                                                        <!-- <li><a href="event_details.php">Event Details</a></li> -->
                                                        <!-- <li><a href="Admissions.html">Admissions</a></li>
                                                        <li><a href="elements.html">elements</a></li> -->
                                                    </ul>
                                                </li>
                                                <li><a href="wiser/contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <!-- <a data-scroll-nav='1' href="#">Apply NOw</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->