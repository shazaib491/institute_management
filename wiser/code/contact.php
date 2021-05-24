<?php 
session_start();
include("connection/connect.php");
// print_r($conn);
 $table="contacts";
 	$message=$_POST['message'];
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$subject=$_POST['subject'];

  	$field_values=array('name','email','subject','message');
  	$data_values=array($name,$message,$email,$subject);

 function Insertdata($table,$field,$data,$conn){
 $prefix = $contacts = '';
	foreach ($data as $info)
	{
    	$contacts .= $prefix . '"' . $info . '"';
    	$prefix = ', ';
	}

$field_values= implode(',',$field);
    
		$sql="INSERT INTO `{$table}`($field_values)values($contacts)";
    	$result=$conn->query($sql);
    if($result){
    	$_SESSION['success']="We Will Contact You SOON";
    	header('location:../contact.php');
    }
    else

    {
    	  echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
Insertdata($table,$field_values,$data_values,$conn);

// 	
?>