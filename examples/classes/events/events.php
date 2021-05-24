<?php
include('class.events.php');
$events=new Events();

if(isset($_POST['submit']))
{
    $head=$_POST['head'];
    $hdate=date($_POST['hdate']);
    $htime=$_POST['htime'];
    $hplace=$_POST['hplace'];
    $img=$_FILES['img'];
    $detail=$_POST['detail'];
    $temp=time();
    // $slider->uploadFile($_FILES['img']);
        $events->Insertevents($head,$hdate,$htime,$hplace,$temp,$img,$detail);
}
else
    if(isset($_POST['update']))
    {
        
        $head=$_POST['head'];
        $hdate=date($_POST['hdate']);
        $htime=$_POST['htime'];
        $hplace=$_POST['hplace'];
        $img=$_FILES['img'];
        $detail=$_POST['detail'];
        $id=$_POST['id'];
        if (empty($_FILES['img']['name'][0])) {
        $events->updateEvents($id,$head,$hdate,$htime,$hplace,$detail);
    }
else
{
    $events->updateEventsWithImages($id,$head,$hdate,$htime,$hplace,$temp,$img,$detail);

}

    }

?>