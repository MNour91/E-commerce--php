
<?php

include_once './assets/designs/header.php';

?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Category</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Category</li>
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
<!-- category block area start -->

<div class="category-block-area">
    <div class="container">
        <div class="row">
        
<!-- category content area start -->
<div class="category-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="category-sidebar"><!-- category sidebar -->
                    <div class="category-filter-widget"><!-- category-filter-widget -->
                        <h4 class="title">Filter by <span class="right">+</span></h4>
                         
                        <ul class="cat-list">
                        <?php
                            $show = $connect -> query('SELECT * FROM category');
                            foreach ($show as $row_c) {
                            
                            ?>
                            <li><a href="?id=<?php echo $row_c['id'];?>"><?php echo $row_c['name'];?> <span class="right">+</span></a></li>
                            <?php } ?>
                       
                       
                        </ul>
                    </div><!-- //.category-filter-widget -->
                </div><!-- //. category sidebar -->
                <div class="category-compare">
                    <h4 class="title">compare (03)</h4>
                    <ul class="compare-list">
                        <li>
                            <div class="single-compare-item"><!-- single compare item -->
                                <h4 class="title">Intel kaby lake core i3 7100 3.90GHZ 3MB.</h4>
                                <div class="close-btn">X</div>
                            </div><!-- //..single compare item -->
                        </li>
                        <li>
                            <div class="single-compare-item"><!-- single compare item -->
                                <h4 class="title">Intel kaby lake core i3 7100 3.90GHZ 3MB.</h4>
                                <div class="close-btn">X</div>
                            </div><!-- //..single compare item -->
                        </li>
                        <li>
                            <div class="single-compare-item"><!-- single compare item -->
                                <h4 class="title">Intel kaby lake core i3 7100 3.90GHZ 3MB.</h4>
                                <div class="close-btn">X</div>
                            </div><!-- //..single compare item -->
                        </li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="boxed-btn">Compare</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="right-content-area"><!-- right content area -->
                    <div class="top-content"><!-- top content -->
                        <div class="left-conent">
                            <span class="cat">Cloths</span>
                        </div>
                        <div class="right-content">
                            <ul>
                                <li>
                                    <div class="form-element has-icon">
                                        <select class="selectpicker input-field select">
                                            <option value="0">Show</option>
                                            <option value="2">Hide</option>
                                            <option value="1">Show</option>
                                        </select>
                                        <div class="the-icon">
                                                <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-element has-icon">
                                        <select class="selectpicker input-field select">
                                            <option value="0">short by</option>
                                            <option value="2">Price</option>
                                            <option value="1">Ratings</option>
                                        </select>
                                        <div class="the-icon">
                                                <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid icon active"> 
                                        <i class="fas fa-th-large"></i>
                                </li>
                                <li class="grid icon"> 
                                        <i class="fas fa-th-list"></i>
                                </li>
                            </ul>
                        </div>
                    </div><!-- //. top content -->
                    <div class="bottom-content"><!-- top content -->
                        <div class="row">
                           
                        <?php
                                if(!isset($_GET['id'])){
                                $rows = "SELECT * FROM products ";

                            }else {
                                $id = $_GET['id'];
                                $rows = "SELECT * FROM products WHERE type_product = '$id'";
                            }
                                $veiw_pro = $connect -> query($rows);
                                foreach ($veiw_pro as $show_pro) {
             
                        ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="./admin/product_img/<?php echo $show_pro['main_img'];?>" alt="new collcetion image" height="300px" width="400px">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category"><?php 
                            if($show_pro['type_product'] == 7){
                                echo 'Mobile Phones';
                            }elseif($show_pro['type_product'] == 1){
                                echo 'Electronics';
                            }elseif($show_pro['type_product'] == 2){
                                echo 'Fashion';
                            }elseif($show_pro['type_product'] == 3){
                                echo 'computers';
                            }elseif($show_pro['type_product'] == 4){
                                echo 'Toys,Games';
                            }elseif($show_pro['type_product'] == 5){
                                echo 'books';
                            }else{
                                echo 'Home & furniture';
                            }
                            
                            
                            
                        ?></span>
                                        <a href="product-details.php?id=<?php echo $show_pro['id']?>"><h4 class="title"><?php echo $show_pro['name'];?></h4></a>
                                        <div class="price"><span class="sprice">$<?php echo $show_pro['price'] -  $show_pro['discount'] ; ?></span> <del class="dprice">$<?php echo $show_pro['price']?></del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                                <?php }?>
                            
                        </div>
                    </div><!-- //.top content -->
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</div>
<!-- category content area end -->

<!-- our story area start -->
<section class="our-story-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-8">
                <div class="section-title">
                    <span class="subtitle rubik">Latest Posts</span>
                    <h2 class="title rubik">Read Our Stories</h2>
                </div>
           </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/01.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                       <a href="#"> <h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/02.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                        <a href="#"><h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/03.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                        <a href="#"><h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
        </div>
    </div>
</section>
<!-- our story area end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->
    <?php
 include_once './assets/designs/footer.php';

?>