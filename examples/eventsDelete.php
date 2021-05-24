<?php
include('classes/events/class.events.php');
$deleteEvents=new Events();
$id=$_GET['id'];
$deleteEvents->deleteEvents($id);


?>