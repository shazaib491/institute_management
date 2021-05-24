<?php include('include/header.php');

include("../examples/classes/events/class.events.php");
$events=new Events();
$events=$events->fetchall();
?>

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Recent Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- recent_event_area_strat  -->
    <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent Event</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            
                <div class="col-lg-10">
                <?php

            foreach($events as $event)
            {
              
            ?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <!-- <span></span> -->
                            <p><?= $event['onnounceDate']; ?></p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.php?id=<?= $event['temp'];?>">
                                <h4><?= $event['heading']; ?></h4>
                             </a>
                            <p><span> <i class="flaticon-clock"></i><?= $event['htime']; ?></span> <span> <i class="flaticon-calendar"></i><?= $event['hdate'];?> </span> <span> <i class="flaticon-placeholder"></i><?= $event['hplace'];?></span> </p>
                        </div>
                    </div>
            <?php }?>
                    
                   
                </div>
            </div>
        </div>
    </div>
    <!-- recent_event_area_end  -->
<?php include('include/footer.php'); ?>