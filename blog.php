
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
                        <h1 class="title">Blog</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog</li>
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

<!-- blog page content area start -->
<section class="blog-page-content-area">
    <div class="container">
        <div class="row">
            <?php
            $show_posts= $connect-> query("SELECT * FROM blog");
            foreach ($show_posts as $row_posts) {
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="./admin/img/<?php echo$row_posts['img']?>" alt="our story" width="350px" height="267px">
                    </div>
                    <div class="conent">
                        <span class="time"><?php echo$row_posts['date']?></span>
                        <a href="blog-details.php?id=<?php echo$row_posts['id']?>"><h4 class="title"><?php echo$row_posts['subject']?></h4></a>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <?php
         }?>

        </div>
    </div>
</section>
<!-- blog page content area end -->
<?php
 include_once './assets/designs/footer.php';

?>