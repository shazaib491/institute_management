<?php
session_start();
include("include/header.php"); ?>
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container-fluid">
        <!-- https://goo.gl/maps/iLb689n4DcwNNwSE6 -->
        <div class=" d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.5784162214304!2d77.4009883499084!3d23.258423513235435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c69fa938c5369%3A0xf8cf6b7b4f5f211c!2sShanu%20shabu%20Manzil!5e0!3m2!1sen!2sin!4v1592129920782!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            </script>

        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">

                <form class="form-contact contact_form needs-validation" novalidate action="../examples/classes/request/contacts.php" method="post" novalidate="novalidate">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="validationCustomMessage" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Messege" required></textarea>
                                <div class="invalid-feedback">
                                Message field is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control " name="name" id="name" type="text" id="validationCustomMessage"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                <div class="invalid-feedback">
                                    Name field is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="validationCustomEmail"  type="email"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required> 
                                <div class="invalid-feedback">
                                Email field is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" name="mobile" id="validationCustomerNumber" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Mobile number" required>
                                <div class="invalid-feedback">
                                Mobile no field is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <select class="form-control" name="course" style="height:50px;">
                                    <option value="bca">BCA</option>
                                    <option value="MSc(cs)">MSC(cs)</option>
                                    <option value="pgdca">PGDCA</option>
                                    <option value="dca">DCA</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Submit" name="submit" class="button button-contactForm boxed-btn">
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3> Ibrahimpura Azad Market</h3>
                        <p>Bhopal, Mp 462001</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+91 8959883069</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>SmartInstitute@gmail.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
// Initialize the client with your api key and secret
// $client = new GetStream\Stream\Client('n6rxbqcfbvde', '9mkq7zu4p4rsden9vvv9y5kr4cuq4x6weaczdkyrcavbj333j8dbv3vsdcj5tymw');

// For the feed group 'user' and user id 'eric' get the feed
// $ericFeed = $client->feed('user', 'eric');

// Add the activity to the feed
// $data = [
//     "actor"=>"eric",
//     "verb"=>"like",
//     "object"=>"3",
//     "tweet"=>"Hello world",
// ];

// $ericFeed->addActiv
</script>
<script>

// const tommaso = { id: "tommaso" };

// create a channel and assign user Tommaso as owner
// const channel = client.channel("team", "stream", { created_by: tommaso })
// await channel.create();

// send a message for tommaso
// const message = {
//    text: "hi there!",
//    user: tommaso,
// };

// await channel.sendMessage(message);
                    
</script>
<?php include("include/footer.php"); ?>