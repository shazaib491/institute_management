<?php include("include/header.php");
include("../examples/classes/courses/class.courses.php");
$courses = new Courses();
$coursesG = $courses->fetchGraduate1();
$coursesP = $courses->fetchPostGraduate2();
$coursesU = $courses->fetchUnderGraduate3();
$latest = $courses->fetchlatest();
?>
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Our Courses</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- popular_program_area_start  -->
<div class="popular_program_area section__padding program__page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Our Courses</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <nav class="custom_tabs   text-center">
                    <div class="nav" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduate </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postgraduate </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">UnderGraduate</a>
                        <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Training</a> -->
                    </div>
                </nav>
            </div>
        </div>

        <style>
        </style>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($coursesG)) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <figure>
                                        <img src="../assets/img/<?= $row['imgname']; ?>" style="height: 195px;" alt="">
                                        <figcaption class="position-absolute bg-light p-2 w-50" style="top:160px">Fees:- Rs <?= $row['fees']; ?></figcaption>
                                    </figure>
                                    <span class="float-left ml-3 mt-2">Duration:- <?= $row['duration']; ?>years</span>
                                    <span class="float-right ml-3 mt-2">Time <?= $row['strtTime']; ?> To <?= $row['endTime']; ?></span>
                                </div>
                                <div class="p-4">
                                    <div class="p-3">
                                        <h4 class="text-center "><?= $row['subtitle']; ?></h4>
                                        <p class="text-justify"><?= $row['Description']; ?>
                                        </p>

                                        <a href="enquiry.php" class="boxed-btn5 mx-auto d-block">Apply Now</a>
                                    </div>
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

                                    <img src="../assets/img/<?= $row['imgname']; ?>" style="height: 195px;" alt="">
                                    <figcaption class="position-absolute bg-light p-2 w-50" style="top:160px">Fees:- Rs 14000</figcaption>

                                    <span class="float-left ml-3 mt-2">Duration:- 2years</span>
                                    <span class="float-right ml-3 mt-2">Time 8:00 To 12:00 Am</span>
                                </div>
                                <div class="p-4">
                                    <h4 class="text-center mt-5"><?= $row['subtitle']; ?></h4>
                                    <p class="text-justify"><?= $row['Description']; ?></p>

                                    <a href="enquiry.php" class="boxed-btn5 d-block">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($coursesU)) { ?>

                        <div class="col-lg-4 col-md-6">
                        <div class="single__program">
                                <div class="program_thumb">

                                    <img src="../assets/img/<?= $row['imgname']; ?>" style="height:195px;" alt="">
                                    <figcaption class="position-absolute bg-light p-2 w-50" style="top:160px">Fees:- Rs<?= $row['fees']; ?></figcaption>

                                    <span class="float-left ml-3 mt-2">Duration:- <?= $row['duration']; ?>Years</span>
                                    <span class="float-right ml-3 mt-2">Time <?= $row['strtTime']; ?> To <?= $row['endTime']; ?> </span>
                                </div>
                                <div class="p-4">
                                    <h4 class="text-center mt-5"><?= $row['subtitle']; ?></h4>
                                    <p class="text-center"><?= $row['Description']; ?></p>

                                    <a href="enquiry.php" class="boxed-btn5 d-block">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_program_area_end -->

<?php include("include/footer.php"); ?>