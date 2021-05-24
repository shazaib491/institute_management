<?php include"include/header.php";



//Get videos from channel by YouTube Data API
// echo "hello wo";
$API_key="AIzaSyBds3nU35rE-y0uE7JRRcYzKvhAcESukgo"; // Provide your API Key
$channelID="UCc-squOnJBmTOD-MuUR2BGw"; // Provide your Channel ID
$maxResults="10"; // Number of results to display
$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
?>
    <h3 class="p-3 text-center text-capitalize">Online Classes During reason Of Covid19 Pandemic</h3>

<div class="container">
    <div class="row">
        <!-- <div class="col-md-8  embed-responsive embed-responsive-16by9" style="padding-bottom: 40%;">
        <iframe width="560" height="200px" src="https://www.youtube.com/embed/fwTy4FUjVLU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> -->
        <?php
            $i=0;
            foreach ($videoList->items as $item) {
                print_r($item->snippet->playlist);?>
        <div class="col-md-4 mt-5">
            
  <?php  //Embed() video
    // print_r($item);
    if (isset($item->id->videoId)) {
        $display=$item->snippet->publishedAt; ?>
  <div class="text-center w-100">
   <?php  echo '<div class="w-100  ">
                <iframe  src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
            </div>'; ?>
    </div>
    <div class="media-body">
      <h5 class="ml-3 mt-3 p-3 text-center"><?= $item->snippet->title ?></h5>
      <p class="ml-3 mt-3 p-3 text-center"><?php echo wordwrap($display,10, "\n", TRUE) ;?></p>
    </div>
   
        </div>
        <?php }} ?>

        
    </div>
</div>


                </div>
                </div>





<?php include"include/footer.php"; ?>