 <!-- footer start -->
 <footer class="footer">
     <div class="footer_top">
         <div class="container">
             <div class="newsLetter_wrap ">
                 <div class="row justify-content-between">
                     <!-- <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div> -->
                     <div class="col-md-12 col-lg-12 text-center">
                         <div class="footer_widget">
                             <h3 class="footer_title">
                                 Stay Updated
                             </h3>
                             <div class="socail_links">
                                 <ul>
                                     <li>
                                         <a href="https://www.facebook.com/profile.php?id=2054869864817911&ref=br_tf&epa=SEARCH_BOX">
                                             <i class="ti-facebook"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="https://twitter.com/AcademyGist">
                                             <i class="fab fa-twitter"></i>
                                         </a>
                                     </li>
                                     <li class="">
                                         <a href="https://wa.me/+919630031012?text=I'm%20interested%20in%20your%20Institute%20will%20you%20accept%20my%20request" class="bg-success">
                                             <i class=" fab fa-whatsapp"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#">
                                             <i class="fab fa-linkedin"></i>
                                         </a>
                                     </li>
                                 </ul>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-xl-3 col-md-6 col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             <!-- Have a Question ? -->
                         </h3>
                         <ul class="text-light ">
                             <?php
                                $logot = new LogoMaker;
                                $logo = $logot->fetchall();
                                $row = mysqli_fetch_array($logo);

                                echo '<img src="assets/img/' . $row['img'] . '" class="bg-light" style="width:100px;">';
                                ?>

                             <li class="mt-3 text-light">GIST2013@gmail.com</li>
                             <li class="text-light">Address:-</li>
                             <li class="mt-3 text-light" style="line-height:23px;">
                                 (First Floor),Hotel Hilton Beside of Sarawati Prakashan,Moti Masjid,Sultania Road,Bhopal(M.P)

                             </li>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Our Links
                         </h3>
                         <ul>
                             <li><a class="text-light" href="wiser/index.php">Home</a></li>
                             <li><a class="text-light" href="wiser/about.php">About us </a></li>
                             <li><a class="text-light" href="wiser/Courses.php">Courses</a></li>
                             <!-- <li ><a class="text-light" href="blog.php">Our Blog</a></li> -->
                             <li><a class="text-light" href="wiser/contact.php">Contacts</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6  col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Community
                         </h3>
                         <ul>
                             <li><a class="text-light" href="https://twitter.com/AcademyGist">Twitter</a></li>
                             <li><a class="text-light" href="https://www.facebook.com/profile.php?id=2054869864817911&ref=br_tf&epa=SEARCH_BOX">Facebook</a></li>
                             <li><a class="text-light" href="https://wa.me/+919630031012?text=I'm%20interested%20in%20your%20Institute%20will%20you%20accept%20my%20request">Whatsapp</a></li>
                             <li><a class="text-light" href="#"></a></li>
                             <li><a class="text-light" href="#"></a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Classes
                         </h3>
                         <ul>
                             <!-- <li><a  class="text-light" href="#">Term and Condition</a></li>
                                <li><a  class="text-light" href="#">Help</a></li>
                                <li><a  class="text-light" href="#">Contactsus</a></li>
                                <li><a  class="text-light" href="#"></a></li> -->
                             <li><a class="text-light" href="wiser/onlineClass.php">Online Classes</a></li>
                         </ul>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="copy-right_text">
         <div class="container">
             <div class="footer_border"></div>
             <div class="row">
                 <div class="col-xl-12">
                     <p class="copy_right text-center">
                         <p>
                             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                             Copyright &copy;<script>
                                 document.write(new Date().getFullYear());
                             </script> All rights reserved | This template is Design by <i class="ti-heart" aria-hidden="true"></i> by <a href="" target="_blank">Tabish Ahmed | Mohammad Osama | Arif beig</a>
                             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                         </p>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer end  -->
 <!-- Modal -->

 <!--Model Closed-->

 <!-- JS here -->
 <script src="wiser/js/vendor/modernizr-3.5.0.min.js"></script>
 <script src="wiser/js/vendor/jquery-1.12.4.min.js"></script>
 <script src="wiser/js/popper.min.js"></script>
 <script src="wiser/js/bootstrap.min.js"></script>
 <script src="wiser/js/owl.carousel.min.js"></script>
 <script src="wiser/js/isotope.pkgd.min.js"></script>
 <script src="wiser/js/ajax-form.js"></script>
 <script src="wiser/js/waypoints.min.js"></script>
 <script src="wiser/js/jquery.counterup.min.js"></script>
 <script src="wiser/js/imagesloaded.pkgd.min.js"></script>
 <script src="wiser/js/scrollIt.js"></script>
 <script src="wiser/js/jquery.scrollUp.min.js"></script>
 <script src="wiser/js/wow.min.js"></script>
 <script src="wiser/js/nice-select.min.js"></script>
 <script src="wiser/js/jquery.slicknav.min.js"></script>
 <script src="wiser/js/jquery.magnific-popup.min.js"></script>
 <script src="wiser/js/plugins.js"></script>
 <script src="wiser/js/gijgo.min.js"></script>
 <!--contact js-->
 <script src="wiser/js/contact.js"></script>
 <script src="wiser/js/jquery.ajaxchimp.min.js"></script>
 <script src="wiser/js/jquery.form.js"></script>
 <script src="wiser/js/jquery.validate.min.js"></script>
 <script src="wiser/js/mail-script.js"></script>

 <script src="wiser/js/main.js"></script>
 <script src="wiser/js/main.js"></script>
 <script>
     $('#datepicker').datepicker({
         iconsLibrary: 'fontawesome',
         icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
     });
     $('#datepicker2').datepicker({
         iconsLibrary: 'fontawesome',
         icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

     });
 </script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

 <script type="text/javascript">
     var select = document.querySelector('#options-animation-timing-func-select');
     const config = {
         type: "carousel",
         perView: 3,
         breakpoints: {
             800: {
                 perView: 1
             },
         }
     }
     new Glide('.glide', config).mount()
 </script>



 <script type="text/javascript">
     var select = document.querySelector('#options-animation-timing-func-select');
     const configs = {
         type: "carousel",
         perView: 3,
         breakpoints: {
             800: {
                 perView: 1
             },
         }
     }
     new Glide('.glides', config).mount()
 </script>
 </body>

 </html>