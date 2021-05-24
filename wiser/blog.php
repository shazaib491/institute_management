<?php include("include/header.php"); 
include("../examples/classes/blogs/class.blogs.php");
$blogs=new Blogs();
$get=$blogs->recents();
$result=$blogs->fetchalll();

?>


    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="../assets/img/<?= $row['img']; ?>" alt="">
                                <a href="single-blog.php?id=<?= $data['temp']; ?>" class="blog_item_date">
                                    <h3><?= $date = date('j', strtotime($row['date']));?></h3>
                                    <p><?= $date = date('F', strtotime($row['date'])); ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.php?id=<?= $row['temp']; ?>">
                                    <h2><?= $row['title'];?></h2>
                                </a>
                                <p><?= $row['description']; ?></p>
                                <ul class="blog-info-link">
                                    <!-- <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
                                </ul>
                            </div>
                        </article>
                <?php  }?>

                        

                       

                   
                       

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget d-none">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php foreach($get as $data){ ?>
                            <div class="media post_item">

                                <img src="../assets/img/<?= $data['img']; ?>" class="w-50" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.php?id=<?= $data['temp']; ?>">
                                        <h3><?=$data['title']; ?></h3>
                                    </a>
                                    <p><?= $data['date']; ?></p>
                                </div>
                            </div>
                            <?php }?>
                          
                          
                          
                        </aside>
                  


                       


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

 <?php include("include/footer.php"); ?>

