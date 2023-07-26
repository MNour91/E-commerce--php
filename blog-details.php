
<?php
$active = "blog";
include_once './assets/designs/header.php';

?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Blog Details</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<div class="body-overlay" id="body-overlay"></div>
<?php
include_once "./assets/designs/searchbar.php";

include_once './assets/designs/table_rating.php';

 include_once './assets/designs/carts.php';


?>
<?php
$id = $_GET["id"];
$show = $connect ->query("SELECT * FROM blog WHERE id = '$id'");
$row_blog = $show -> fetch_assoc();
?>
    <!-- blog details page content area start -->
    <section class="blog-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-blog-post"><!-- single blog post -->
                            <div class="meta-time"><!-- meta time -->
                                <span class="date" style="font-size:15px"><?php echo $row_blog["date"]; ?></span>  
                            </div><!-- //.meta time -->
                            <div class="details-container"><!-- details contaienr -->
                                <div class="meta-tags"><!-- meta tags -->
                                    <ul>
                                        <li><i class="fas fa-comments"></i> <span class="cunt_commect"><?php  $select = $connect->query("SELECT * FROM comments WHERE id_post = $id");
                                                echo $select->num_rows; ?>
                                        </span> Comments </li>
                                        <li><i class="fas fa-share"></i> 50 Shares</li>
                                    </ul>
                                </div>
                                <div class="post-body"><!-- post body -->
                                    <h3 class="title"><?php echo $row_blog["subject"]; ?></h3>
                                    <p><?php echo $row_blog["post"]; ?></p>
                                    <div class="post-bottom-content"><!-- post bottom content -->
                                        <div class="top-content"><!-- top content -->
                                            <div class="left-content"><h4 class="title">Releted Tags</h4></div>
                                            <div class="right-content"><h4 class="title">Social Share</h4></div>
                                        </div><!-- //.top content -->
                                        <div class="bottom-content"><!-- bottom content -->
                                            <div class="left-content"><!-- left content -->
                                                <ul>
                                                    <li><a href="#">organic</a></li>
                                                    <li><a href="#">Foods</a></li>
                                                    <li><a href="#">tasty</a></li>
                                                </ul>
                                            </div><!-- //.left content -->
                                            <div class="right-content"><!-- right content -->
                                                <h4 class="title">Social Share</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                                </ul>
                                            </div><!-- right content -->
                                        </div><!-- //.bottom content -->
                                    </div><!-- //.post bottom content -->
                                </div><!-- //.post body -->
                                <div class="single-post-separator"></div>
                                <div class="comments-area "><!-- comments area satart -->
                                    <h3 class="title">Comments</h3>
                                    <?php
                                        $show_comment= $connect-> query("SELECT * FROM comments where id_post ='$id'");
                                        foreach ($show_comment as $row_comment) {
                                    ?>

                                    <div class="single-comment-item margin-bottom-40 add-comment"><!-- single comment item -->
                                        <div class="thumb">
                                            <img src="assets/img/149071.png" alt="commente avatar">
                                        </div>
                                        <div class="content">
                                            <span class="meta-date"> <?php echo $row_comment['date'] ?> </span>
                                            <h4 class="author-name"><?php echo $row_comment['name'] ?> </h4>
                                            <p><?php echo $row_comment['commect'] ?> </p>
                                        </div>
                                        <a href="#" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                    
                                    </div><!-- //. single comment item -->
                                      <?php } ?>          


                                </div><!-- //. comments area end -->
                                <div class="single-blog-page-separator"></div>
                                <div class="comments-form-area"><!-- comments form area -->
                                    <h3 class="title">Post Comment</h3>
                                    <div class="comment-form-wrapper"><!-- comment form wrapper -->
                                        <form id="commect-form" data='<?php echo $id ?>'>
                                            <div class="form-element margin-bottom-15">
                                                <div class="has-icon textarea">
                                                    <textarea rows="20" cols="8" placeholder="Type your comments...." class="input-field borderd textarea comment"></textarea>
                                                    <div class="the-icon">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-bottom-20">
                                            
                                             <input type="text" class="input-field borderd name_comment" placeholder="Type your name....">
                                                
                                            </div>
                                            <!-- <div class="form-element margin-bottom-20">
                                              <input type="file" class="input-field borderd imgs" placeholder="Type your Img....">     
                                            </div>                       -->
                                            <div class="form-element margin-top-40">
                                                <input type="submit" value="post comment " class="submit-btn btn-rounded">
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- comments form area -->
                            </div>
                        </div>
                    </div><!-- //.col-lg-8 -->
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="widget-area instagram">
                                <!-- instagram widget start -->
                                <div class="widget-title">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="instagram-feed">
                                        <!-- instagram feed -->
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/01.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/02.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/03.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/04.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/05.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/06.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/07.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/08.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/09.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.instagram feed -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- instagram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area social">
                                <!-- social widget start-->
                                <div class="widget-title">
                                    <h4>Follow Us</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body-->
                                    <ul class="social-links">
                                        <!-- social links-->
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wordpress">
                                                <i class="fab fa-wordpress"></i>
                                            </a>
                                        </li>
                        
                                    </ul>
                                    <!-- ./ social links-->
                                </div>
                                <!-- ./ widget body -->
                            </div>
                            <!-- instragram widget end -->
                            <div class="sidebar-separator"></div>                           
                            <div class="widget-area latest-post">
                                <!-- latest post widget start -->
                                <div class="widget-title">
                                    <h4>Latest Posts</h4>
                                </div>
                                <div class="widget-body">
                                <?php
                                    $show_posts= $connect-> query("SELECT * FROM blog ORDER BY id DESC LIMIT 4");
                                    foreach ($show_posts as $row_posts) {
                                    ?>
                                          <!-- widget body -->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="./admin/img/<?php echo$row_posts['img']?>" alt="latest blog post image" height="60px" width="80px">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="blog-details.php?id=<?php echo$row_posts['id']?>">
                                                    <h5 class="mt-0"><?php echo$row_posts['name']?></h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> <?php echo$row_posts['date']?></span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    
                                   <?php
                                    }
                                  ?>
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <div class="sidebar-separator latest-post"></div>
                            <!-- latest post widget end -->
                            <div class="widget-area tags">
                                <!-- tag widget  start -->
                                <div class="widget-title">
                                    <h4>KEYWORDS</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="tags-list">
                                        <!-- tags -->
                                        <li>
                                            <a href="blog.php">Products</a>
                                        </li>
                                        <?php
                                        $show = $connect -> query('SELECT * FROM category');
                                        foreach ($show as $row_c) {
                                        
                                        ?>
                                        <li><a href="blog.php?id=<?php echo $row_c['id'];?>"><?php echo $row_c['name'];?></a></li>
                                         <?php } ?>
                                  </ul>
                                    <!-- /.tags -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- tag widget  end -->
                        </aside>
                        <!-- sidebar end -->
                    </div><!-- //.col-lg-4 -->
                </div><!-- //.row -->
            </div><!-- //.container -->
        </section>
        <!-- blog details page content area end -->
  <?php
 include_once './assets/designs/footer.php';

?>