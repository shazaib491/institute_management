<?php
$connect = mysqli_connect('localhost', 'shazaib', 'mausamash', 'dashboard');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
    $state = $_POST['stt'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $image = time() . $_FILES['image']['name'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `enquiry`( `name`, `email`, `mobile`, `dob`, `age`, `state`, `gender`, `subject`, `city`, `pinocde`, `image`, `address`) VALUES ('$name','$email','$mobile','$dob','$age','$state','$gender','$subject','$city','$pincode','$image','$address') ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../assets/img/' . $image);
        session_start();
        $_SESSION['success'] = "We will Contact you Soon";
        header('location:enquiry.php');
    } else {
        echo "failed";
    }
}
