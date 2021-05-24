<?php
session_start();
include("include/header.php");

include("../examples/classes/slider/class.slider.php");
$slider = new Slider;
$slide = $slider->fetchall();
include("../examples/classes/offers/class.offers.php");
$offers = new Offers;
$offers = $offers->fetchLimit();

include("../examples/classes/courses/class.courses.php");
$courses = new Courses;
$coursesG = $courses->fetchGraduate();
$coursesP = $courses->fetchPostGraduate();
$coursesU = $courses->fetchUnderGraduate();
$latest = $courses->fetchlatest();

include("../examples/classes/toppers/class.toppers.php");
$toppers = new Toppers;
$top = $toppers->fetchall();


include("../examples/classes/news/class.news.php");
$news = new News;
$newss = $news->fetchall();

include("../examples/classes/short-terms/class.terms.php");
$terms = new Terms;
$termss = $terms->getAll();


// $coursespP=$courses->fetchPostGraduate();
// $coursesU=$courses->fetchUnderGraduate();

// while($row=mysqli_fetch_assoc($slide)){
?>
<!-- <style> -->
<!-- /* .slider_bg_1 { */ -->
<!-- /* background-image: url('../assets/img/'); */ -->


<!-- slider_area_start -->
<style>
    @media only screen and (max-width: 600px) {
        .h901 {
            with: 100% !important;
        }
    }

    .section__padding {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .section__padding {
        /* padding-top: 200px; */
        /* padding-bottom: 200px; */
    }
</style>
<!-- slider_area_start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

<style>
    body {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
    }

    .d-table {
        width: 100%;
        height: 100%;
        display: table;
    }

    .d-tablecell {
        display: table-cell;
        vertical-align: middle;
    }

    .custom-btn1 {
        background-color: #1330d2;
        color: white;
        border: 1px solid #1330d2;
        display: inline-block;
        padding: 12px 30px;
        text-transform: uppercase;
        border-radius: 30px;
        text-decoration: none;
    }

    .custom-btn1:hover {
        background-color: transparent;
        text-decoration: none;
        color: #fff;
    }

    /*
Hero slider style
==========================*/
    .hero-slider {
        position: relative;
    }

    .single-hs-item {
        height: 700px;
        background-size: cover;
        background-position: center center;
        position: relative;
    }

    .single-hs-item:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-color: #000;
        opacity: .6;
    }

    .item-bg1 {
        /* https://techsolutionshere.com/wp-content/uploads/2019/01/s1.jpg */
        background-image: url(img/banner/banner.png);
    }

    .item-bg2 {
        /* https://techsolutionshere.com/wp-content/uploads/2019/01/s2.jpg */
        background-image: url(img/banner/banner2.png);
    }

    .item-bg3 {
        background-image: url(img/banner/bradcam.png);
    }

    .hero-text {
        padding: 0 15px;
        text-align: center;
        max-width: 1140px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
    }

    .hero-text h1 {
        color: #fff;
        font-size: 50px;
        text-transform: capitalize;
        font-weight: 600;
        margin: 0;
    }

    .hero-text p {
        color: #fff;
        font-size: 17px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        line-height: 30px;
        margin-top: 20px;
        margin-bottom: 35px;
    }

    .hero-slider .owl-item.active h1 {
        -animation: 1s .3s fadeInUp both;
    }

    .hero-slider .owl-item.active p {
        -webkit-animation: 1s .3s fadeInUp both;
        animation: 1s .3s fadeInUp both;
    }

    .hero-slider .owl-item.active .slider-btn {
        -webkit-animation: 1s .3s fadeInUp both;
        animation: 1s .3s fadeInUp both;
    }

    .owl-carousel .owl-nav button.owl-prev {
        background-color: #1330d2;
        position: absolute;
        left: 0;
        top: 50%;
        color: #fff;
        font-size: 30px;
        margin: -40px 0 0;
        border-radius: 0;
        height: 50px;
        width: 50px;
    }

    .owl-carousel .owl-nav button.owl-next {
        background-color: #1330d2;
        position: absolute;
        right: 0;
        top: 50%;
        color: #fff;
        font-size: 30px;
        margin: -40px 0 0;
        border-radius: 0;
        height: 50px;
        width: 50px;
    }

    .owl-theme .owl-nav {
        margin-top: 0;
    }

    .owl-dots {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 20px;
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 11px;
        height: 20px;
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #1330d2;
    }

    @media only screen and (max-width: 600px) {
        .single-hs-item {
            height: 400px;
        }

        .hero-text h1 {
            font-size: 30px;
        }

        .hero-text p {
            font-size: 15px;
            margin-bottom: 25px;
        }

        .owl-carousel .owl-nav button.owl-next {
            top: 240px;
            margin: 0;
            bottom: 0px;
        }

        .owl-carousel .owl-nav button.owl-prev {
            top: 240px;
            margin: 0;
            bottom: 0px;
        }

        .owl-dots {
            bottom: 10px;
            left: 50px;
            right: 50px;
        }
    }
</style>

<div id="home" class="hero-slider owl-carousel owl-theme">
    <div class="single-hs-item item-bg1">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="hero-text">
                    <h1>Welcome To Smart Institute</h1>
                    <p>Smart Institute offers its students necessary skills, training, and knowledge along with academic excellence.</p>
                    <div class="slider-btn">
                        <a href="#" data-scroll-nav='1' class="custom-btn1 text-light">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-hs-item item-bg2">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="hero-text">
                    <h1>Special Facilities</h1>
                    <p>Any successful career starts with good education, so we impart knowledge that helps you climb the career ladder.</p>
                    <div class="slider-btn">
                        <a href="#" class="custom-btn1 mr-30">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-hs-item item-bg3">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="hero-text">
                    <h1>Beautiful infrastructure</h1>
                    <p>Well furnished furniture with large Computer lab or different Toilet facilties for Boys And Girls.</p>
                    <div class="slider-btn">
                        <a href="#" class="custom-btn1 mr-30">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    // Hero slider JS
    $('.hero-slider').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'heartBeat',
        items: 1,
        loop: false,
        nav: true,
        dots: true,
    })
</script>


<!-- slider_area_end -->




<!-- slider_area_start -->
<!-- <div class="slider_area"> -->
<!-- <div class="slider_active owl-carousel"> -->
<!-- single_carouse -->
<?php while ($row = mysqli_fetch_assoc($slide)) { ?>
    <!-- <div class="single_slider  d-flex align-items-center  slider_bg_1 img-responsive" style="background-image:url(../assets/img/<?= $row['imgname']; ?>); ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">                                
                                <h3><?= wordwrap($row['content'], 30, "<br>\n"); ?> <br>
                                    </h3>
                                <a href="#" class="boxed-btn3" style="background-color: #1330d2">Get Start</a>
                                 <a href="#" class="boxed-btn4">Take a tour</a> -->
    <!-- </div>
                        </div>
                    </div>
                </div> -->
    <!-- </div> -->
<?php } ?>

</div>
</div>
<!-- slider_area_end -->
<div class="container p-5 mt-5">
    <div class="row">
        <div class="col-md-6 ">
            <img src="img/aboutus.png" class="img-responsive w-100 animate__animated animate__fadeInUp" alt="No image">
        </div>
        <div class="col-md-6">
            <h1 class="font-weight-bold border border-top-0 border-left-0 animate-box animate__animated animate__fadeInUp  border-right-0  p-3 border-primary">
                <a href="./about.php"> <span class="text-primary"> A</span>bout
                    <span class="text-primary"> U</span>s</a>
            </h1>
            <p class="p-4 text-justify animate__animated animate__fadeInUp">
                Smart Institite is a leading institution of professional studies. Since its inception in 2018, SI has been offering the most effective and extensive IT education in Bhopal with a view to blend traditional values and business education.
                <br>
                The program aims at bringing together the students from diverse geographical and educational backgrounds like science, commerce,engineering, etc. and grooms their conceptual and analytical skills so as to streamline their talents to adapt to the ever demanding requirements of the modern business world...
            </p>
        </div>
    </div>
</div>

<!-- service_area_start  -->
<!-- <div class="service_area gray_bg">
        <div class="container">
            <div class="row justify-content-center "> -->
<?php while ($row = mysqli_fetch_assoc($offers)) {
?>
    <!-- <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="<?= $row['icon']; ?>"></i>
                        </div>
                        <div class="service_info">
                            <h4><?= $row['title']; ?></h4>
                            <p><?= $row['descrip']; ?></p>
                        </div>
                    </div>
                </div> -->
<?php } ?>
<!-- <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-error"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div> -->
</div>
</div>
</div>
<!--/ service_area_start  -->

<!-- popular_program_area_start  -->
<div class="popular_program_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Popular Courses</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="custom_tabs text-center">
                    <div class="nav" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduate </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postgraduate </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">UnderGraduate</a>
                        <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Training</a> -->
                    </div>
                </nav>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($coursesG)) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="../assets/img/<?= $row['imgname']; ?>" style="height: 195px;" class="border" alt="">
                                </div>
                                <div class="p-5">
                                    <h3 class="text-center"><?= $row['subtitle']; ?></h4>
                                        <p class="text-center"><?php
                                                                $small = substr($row['Description'], 0, 150);
                                                                echo $small; ?>..</p>
                                        <a href="Courses.php" class="boxed-btn5 mt-3 mx-auto d-block">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($coursesP)) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="../assets/img/<?= $row['imgname']; ?>" style="height: 195px;" class="border" alt="">

                                </div>
                                <div class="p-4">
                                    <h4 class="text-center"><?= $row['subtitle']; ?></h4>
                                    <p class="text-center"><?php
                                                            $small = substr($row['Description'], 0, 150);

                                                            echo $small; ?></p>
                                    <a href="Courses.php" class="boxed-btn5 mx-auto d-block">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="img/program/3.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Mechanical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="img/program/2.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Bio engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($coursesU)) { ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="../assets/img/<?= $row['imgname']; ?>"  style="height: 195px;"alt="">
                                </div>
                                <div class="p-4">
                                    <h4 class="text-center"><?= $row['subtitle']; ?></h4>
                                    <p clas="text-center"><?php
                                                            $small = substr($row['Description'], 0, 100);

                                                            echo $small; ?>..</p>
                                    <a href="Courses.php" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                   
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="course_all_btn text-center">
                    <a href="Courses.php" class="boxed-btn4">View All course</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<!-- popular_program_area_end -->

<!-- latest_coures_area_start  -->
<div class="latest_coures_area">
    <div class="latest_coures_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="coures_info">
                        <div class="section_title white_text">
                            <h3>Latest Courses</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p> -->
                        </div>
                        <div class="coures_wrap d-flex">
                            <?php while ($row = mysqli_fetch_assoc($latest)) {
                            ?>
                                <div class="single_wrap">
                                    <!-- <div class="icon"> -->
                                    <!-- <i class="flaticon-lab"></i> -->
                                    <!-- </div> -->
                                    <h4><?= wordwrap($row['subtitle'], 20, "<br>\n"); ?> <br>
                                    </h4>
                                    <p class="text-left"><?php
                                                            $small = substr($row['Description'], 0, 120);

                                                            echo $small; ?></p>
                                    <a href="Courses.php"  class="boxed-btn5">Apply NOw</a>
                                </div>
                            <?php  } ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ latest_coures_area_end -->

<!-- recent_event_area_strat  -->



<br>
<!-- latest_coures_area_start  -->
<div data-scroll-index='1' class="admission_area">
    <div class="admission_inner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="admission_form">
                        <h3>Apply for Admission</h3>
                        <form action="../examples/classes/request/admission.php" class="needs-validation" novalidate method="post">
                            <?php if (isset($_SESSION['success'])) {
                                echo "<script>
                Swal.fire(
                            {
                                position: 'center',
                                icon: 'success',
                                title: 'We Will Contact You Soon',
                                showConfirmButton: false,
                                timer: 1500
                            }
                        )
                    </script>";
                            }
                            unset($_SESSION['success']);
                            ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" name="fname" id="validationCustomerFname" aria-describedby="inputGroupPrepend" required placeholder="First Name" required>
                                        <div class="invalid-feedback" style="margin-top: -3.75rem;">
                                            Fname Filed is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" name="lname" id="validationCustom02"  placeholder="Last Name" required aria-required="">
                                        <div class="invalid-feedback" style="margin-top: -3.75rem;">
                                            Lname Filed is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" name="mobile" placeholder="Phone Number" id="validationCustomer03" required> 
                                        <div class="invalid-feedback" style="margin-top: -3.75rem;">
                                            Mobile Filed is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="email" name="email" placeholder="Email Address" id="validationCustomer04" required>
                                        <div class="invalid-feedback" style="margin-top: -3.75rem;">
                                            Email Filed is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input">
                                        <textarea cols="30" name="application" placeholder="Write an Application" id="validationCustomer05" rows="10" required></textarea>
                                        <div class="invalid-feedback" style="margin-top: -3.75rem;">
                                            Message Filed is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="apply_btn">
                                        <input type="submit" name="submit" value="Apply Now" style="margin-top: 3.75rem;" class="boxed-btn3">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!--/ latest_coures_area_end -->

<!-- team -->
<style type="text/css">
    .checked {
        color: orange;
    }
</style>
<div class="container">
    <div class="section_title text-center mb-70">
        <h3 class="mt-5 pt-5">Our Toppers</h3>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
    </div>
    <style>
        .circular--portrait {
            position: relative;
            width: 90px;
            height: 90px;
            overflow: hidden;
            border-radius: 50%;
        }

        .circular--portrait img {
            width: 100%;
            height: auto;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="glide mt-4">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php while ($row = mysqli_fetch_assoc($top)) { ?>
                            <li class="glide__slide border  border-info border-left-0 border-right-0" style="">
                                <div class="card shadow-lg  " style="width:100%;">
                                    <h5 class="card-title text-center text-light p-4 bg-primary  border-bold font-weight-bold m-auto">Smart Institute</h5>
                                    <p class="text-center text-dark pt-3"> <?= $row['year']; ?>&nbsp;Year</p>

                                    <img class="card-img-top circular--portrait  mt-3 w-25   mx-auto d-block" src="../assets/img/<?= $row['image']; ?>" alt="Card image cap">
                                    <div class="card-body ">
                                        <h5 class="card-title text-center  font-weight-bold text-primary text-capitalize"><?= $row['name']; ?></h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><span class="float-left">Divison</span><span class="float-right"><?= $row['division']; ?></span></li>
                                            <li class="list-group-item"><span class="float-left">Ranks</span><span class="float-right"><?= $row['rank']; ?></span></li>
                                            <li class="list-group-item"><span class="float-left">Sgpa</span><span class="float-right"><?= $row['percent'] ?></span></li>
                                            <li class="list-group-item"><span class="float-left">Subject</span><span class="float-right"><?= $row['subject'] ?></span></li>
                                        </ul>
                                    </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> <i class="far fa-arrow-alt-circle-left text-dark" style="font-size:20px;"></i> </button>
                    <button class="glide__arrow glide__arrow--right text-dark" data-glide-dir=">"><i class="far fa-arrow-alt-circle-right" style="font-size:20px;"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="container">
    <div class="section_title text-center mb-70">
        <h3 class="mt-5 pt-5">Short Terms Courses</h3>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
    </div>
    <style>
        .circular--portrait {
            position: relative;
            width: 90px;
            height: 90px;
            overflow: hidden;
            border-radius: 50%;
        }

        .circular--portrait img {
            width: 100%;
            height: auto;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="glides mt-4">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php while ($row = mysqli_fetch_assoc($termss)) { ?>
                            <li class="glide__slide border  border-info border-left-0 border-right-0" style="">
                                <div class="card shadow-lg  " style="width:100%;">
                                    <!-- <h5 class="card-title text-center text-light p-4   border-bold font-weight-bold m-auto" style="background-color:#2496b9;">Gandhi Institute of science & Technology</h5> -->

                                    <img class="card-img-top   mx-auto d-block" style="height: 195px;" src="../assets/img/<?= $row['image']; ?>" alt="Card image cap">
                                    <figcaption class="position-absolute bg-light p-2 w-50" style="top:160px">Fees:- Rs&nbsp;<?= $row['price']; ?></figcaption>
                                <div class="p-2 ">
                                    <span class="float-left ml-3 mt-2 d-block">Duration:- <?= $row['duration']; ?>&nbsp;Months</span>
                                    <span class="float-right ml-3 mt-2 d-block">Time <?= $row['start_time']; ?> To <?= $row['end_time']; ?> </span>
                                </div>
                                
                                <div class="card-body">
                                    <a href="contact.php" class="boxed-btn5 mx-auto d-block">Apply Now</a>

                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> <i class="far fa-arrow-alt-circle-left text-dark" style="font-size:20px;"></i> </button>
                    <button class="glide__arrow glide__arrow--right text-dark" data-glide-dir=">"><i class="far fa-arrow-alt-circle-right" style="font-size:20px;"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- team -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
<!-- recent_news_area_start  -->
<div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Recent News</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($newss)) { ?>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="../assets/img/<?= $row['image']; ?>" style="width:100%px;height:300px" alt="">
                            </a>
                            <!-- <span class="badge"></span> -->
                        </div>
                        <div class="news_info">
                            <a href="news-detail.php?id=<?= $row['temp'];  ?>">
                                <h4><?= $small = substr($row['heading'], 0, 50); ?></h4>
                            </a>
                            <p class="d-flex align-items-center text-center"> <span><i class="flaticon-calendar-1"></i> <?= $date = date('j F, Y', strtotime($row['currentdate']));
                                                                                                                        ?></span>

                                <!-- <span> <i class="flaticon-comment"></i> 01 comments</span> -->
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- recent_news_area_end  -->
<?php include("include/footer.php"); ?>