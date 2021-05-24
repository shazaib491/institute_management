<?php 
session_start();
include "include/header.php";
include "../examples/classes/courses/class.courses.php";
$Courses=new Courses;
$subject=$Courses->fetchall();

?>
<script src="js/cities.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<div class="container">
    <form action="final.php" method="post" enctype="multipart/form-data">
        <h3 class="text-center shadow p-4">Enquiry Form</h3>
        <div class="row">
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

            <div class="form-group col-md-6">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Enter name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="">Mobile</label>
                <input type="text" name="mobile" id="" class="form-control" placeholder="Enter mobile" required>
            </div>

            <div class="form-group col-md-6">
                <label for="">DOB</label>
                <input type="date" name="dob" id="" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="">Age</label>
                <input type="text" name="age" id="" class="form-control" placeholder="Enter age" required>
            </div>
            <div class="form-group col-md-6">
                <label for="">Gender</label>
                <select name="gender" id="" class="form-control" style="height: 34px;" required> 
                    <option value="">Select Your Gender</option>
                    <option value="male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Subject</label>
                <select name="subject" id="" required class="form-control" style="height: 34px;">
                
                    <option value="">Select Your Course</option>
                    <?php while($row=mysqli_fetch_array($subject)) {?>
                    <option value="<?= $row['title']; ?>"><?= $row['title']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">State</label>
                <select style="height: 34px;" onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control" required></select>

            </div>
            <div class="form-group col-md-6">
                <label for="">City</label>
                <select id="state" class="form-control" required name="city" style="height: 34px;" required></select>
            </div>
            <div class="form-group col-md-6">
                <label for="">pincode</label>
                <input type="text" name="pincode" required class="form-control" placeholder="Enter pincode">
            </div>
            <div class="form-group  col-12 ">
                <label for="">Image</label>
                <input type="file" name="image" id="" required class="form-control">
            </div>
            <div class="form-group col-12">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control" name="address" required id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mx-auto d-block w-50" name="submit">Submit</button>
        </div>
    </form>
</div>
<br>
<script language="javascript">
    print_state("sts");
</script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<?php include "include/footer.php"; ?>