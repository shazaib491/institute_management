<?php
include "include/header.php";
$API_key="AIzaSyBds3nU35rE-y0uE7JRRcYzKvhAcESukgo"; // Provide your API Key
$channelID="UCc-squOnJBmTOD-MuUR2BGw"; // Provide your Channel ID
$maxResults="10"; // Number of results to display
https://www.youtube.com/embed?listType=search&list=QUERY

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
?>
<div class="container">
    <div class="row">
    <?php
    
    
    
    
    foreach ($videoList->items as $item) {
    //Embed video
    if (isset($item->id->videoId)) {
        $display=$item->snippet->title; ?>
    <div class="col-md-4 p-5 border">
    <div class="embed-responsive embed-responsive-16by9">
   <?php  echo '<div class="">
                <iframe width="100" height="150" src="https://www.youtube.com/embed?listType=playlist&list=PLzMxwDdPUj-MXwaXJiOa5tdot8ZPfQ2Vr
                    " frameborder="0" allowfullscreen></iframe>
                    
                    <h2>'. $item->snippet->title .'</h2>
            </div>'; ?>
</div>
<p class="text-center shadow pt-3 mt-5 pb-3">
    
<?php echo $display; ?>

</p>

    </div>
    <?php
    }
} ?>
    </div>
    <br>
</div>






<?php
include "include/footer.php";
?>