<?php include('include/header.php'); 
include("../examples/classes/events/class.events.php");
$events=new Events();
$events=$events->getbyid($_GET['id']);?>
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>event details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <div class="event_details_area section__padding">
        <div class="container">
            <div class="row">
                <?php foreach($events as $event) {?>
                <div class="col-lg-12">
                    <div class="single_event d-flex align-items-center">
                        <div class="thumb">
                            <img src="../assets/img/<?= $event['img'];?>" alt="">
                            <div class="date text-center">
                                <!-- <h4></h4> -->
                                <span><?= $event['hdate']; ?></span>
                            </div>
                        </div>
                        <div class="event_details_info">
                            <div class="event_info">
                                <a href="#">
                                    <h4><?= $event['heading']; ?></h4>
                                 </a>
                                <p><span> <i class="flaticon-clock"></i><?= $event['htime']; ?></span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                            </div>
                            <p class="event_info_text">
                                <?= $event['detail'];?>
                            </p>
                            <a href="contact.php" class="boxed-btn3">Book a seat</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php include('include/footer.php'); ?>
