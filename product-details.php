
<?php

include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Product Details</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<?php
$id = $_GET["id"];
$show = $connect ->query("SELECT * FROM products WHERE id = '$id'");
$row_product = $show -> fetch_assoc();
?>
<!-- product details content area  start -->
    <div class="product-details-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="left-content-area"> <!-- left content area -->
                        <div class="product-details-slider" id="product-details-slider" data-slider-id="1">
                           <?php
                           $o_img = explode("-",$row_product["other_imgs"]);
                           for($i = 0 ;$i < count( $o_img);$i++ ){
                           
                           ?>
                            <div class="single-product-thumb imgs">
                                <img src="./admin/product_img/<?php echo $o_img[$i]; ?>" alt="product details image" height="540px" width="540px" >
                            </div>
                            <?php } ?>
                        </div>
                        <ul class="owl-thumbs product-deails-thumb" data-slider-id="1">
                        <?php
                           for($x = 0 ;$x < count( $o_img);$x++ ){
                           
                           ?>
                            <li class="owl-thumb-item">
                                <img src="./admin/product_img/<?php echo $o_img[$x]; ?>" alt="product details thumb" height="80px" width="80px" >
                            </li>
                            <?php } ?>
                        </ul>
                    </div><!-- //.left content area -->
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area"><!-- right content area -->
                        <div class="top-content">
                        <?php
                                $rating = $connect -> query("select * from rating where id_product = '$id'");
                                $review =  $rating -> num_rows;
                                $avg_rate = $connect -> query("select sum(rating) from rating where id_product = '$id'");
                                $count_rate = $avg_rate ->fetch_assoc();
                                if($review != 0){
                                    $result_rate = $count_rate["sum(rating)"] / $review;
                                    $end_rate = round($result_rate);
                                }else{
                                    $end_rate =0;
                                }
                               
                                ?>
                            <ul class="review">
                                <li><i class="fas fa-star" <?php if($end_rate >= 1 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i></li>
                                <li><i class="fas fa-star"<?php if($end_rate >= 2 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i></li>
                                <li><i class="fas fa-star"<?php if($end_rate >= 3 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i></li>
                                <li><i class="fas fa-star"<?php if($end_rate >= 4 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i></li>
                                <li><i class="fas fa-star"<?php if($end_rate == 5 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i></li>
                                <li class="reviewes"><?php                               
                                echo $review;
                                ?>  <small>reviews</small> </li>
                            </ul>
                            <span class="orders">Orders (<?php
                            $counter_order = $connect ->query("SELECT * FROM orders WHERE product_id = '$id'");
                            echo $num = $counter_order ->num_rows;
                            
                            
                            
                            ?>+)</span>
                        </div>
                        <div class="bottom-content">
                            <span class="cat"> <?php 
                            if($row_product['type_product'] == 0){
                                echo 'Mobile Phones';
                            }elseif($row_product['type_product'] == 1){
                                echo 'Electronics';
                            }elseif($row_product['type_product'] == 2){
                                echo 'Fashion';
                            }elseif($row_product['type_product'] == 3){
                                echo 'computers';
                            }elseif($row_product['type_product'] == 4){
                                echo 'Toys,Games';
                            }elseif($row_product['type_product'] == 5){
                                echo 'books';
                            }else{
                                echo 'Home & furniture';
                            }
                            
                            
                            
                        ?></span>
                            <h3 class="title"><?php echo $row_product['name']; ?> </h3>
                            <div class="price-area">
                                <div class="left">
                                        <span class="sprice">$ <span class = "totprice"><?php echo $row_product['price'] -  $row_product['discount'] ; ?></span> </span>
                                        <span class="dprice"><del>$<?php echo $row_product['price']; ?> </del></span>
                                </div>
                                <div class="right">
                                    <a href="#" class="size">size chart</a>
                                </div>
                            </div>
                            <ul class="product-spec">
                                <li>Brands:  <span class="right">Hewlett-Packard </span></li>
                                <li>Product Code: <span class="right code" ><?php echo $row_product['id']; ?></span></li>
                                <li>Reward Points:  <span class="right">100 </span></li>
                                <li>Stock:  <span class="right base-color">In Stock </span></li>
                            </ul>
                            <div class="pdescription">
                                <h4 class="title">Overview</h4>
                                <p><?php echo $row_product['description'] ?></p>

                            </div>
                            <div class="paction">
                                <div class="qty">
                                    <ul>
                                        <li><span class="qtminus"><i class="fas fa-minus"></i></span></li>
                                        <li><span class="qttotal qproduct">1</span></li>
                                        <li><span class="qtplus"><i class="fas fa-plus"></i></span></li>
                                    </ul>
                                </div>
                                <ul class="activities" >
                                    <li><i class="fas fa-star submit_star" data-index="0"></i> </li>
                                    <li><i class="fas fa-star submit_star" data-index="1"></i></li>
                                    <li><i class="fas fa-star submit_star" data-index="2"></i></li>
                                    <li><i class="fas fa-star submit_star"  data-index="3"></i></li>
                                    <li><i class="fas fa-star submit_star"  data-index="4"></i></li>
                                </ul>
                                <div class="rating"></div>
                                <div class="btn-wrapper">
                                    <button class="boxed-btn addcarts " >add to cart</button> 
                                    <div class ="added"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- //. right content area -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-area">
                        <div class="product-details-tab-nav">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="item-review-tab" data-toggle="tab" href="#item_review" role="tab" aria-controls="item_review" aria-selected="true">item review</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="descr-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="descr" aria-selected="false">descriptions</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="method-tab" data-toggle="tab" href="#method" role="tab" aria-controls="method" aria-selected="false">Features</a>
                                </li>
                              </ul>
                        </div>
                          <div class="tab-content" >
                            <div class="tab-pane fade show active" id="item_review" role="tabpanel" aria-labelledby="item-review-tab">
                                <div class="item_review_content">
                                    <h4 class="title">Technical Specifications</h4>
                                    <ul class="product-specification"><!-- product specification -->
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Brand</span>
                                                <span class="details">Apple</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item Height</span>
                                                <span class="details">18 Millimeters</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item Width</span>
                                                <span class="details">31.4 Centimeters</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Screen Size</span>
                                                <span class="details">13 Inches</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item Weight</span>
                                                <span class="details">1.6 Kg</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Product Dimensions</span>
                                                <span class="details">21.9 x 31.4 x 1.8 cm</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item model number</span>
                                                <span class="details">MF841HN/A</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Processor Brand</span>
                                                <span class="details">Intel</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Processor Type</span>
                                                <span class="details">Core i5</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Processor Speed</span>
                                                <span class="details">2.9 GHz</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">RAM Size</span>
                                                <span class="details">8 GB</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Hard Drive Size</span>
                                                <span class="details">512 GB</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Hard Disk Technology</span>
                                                <span class="details">Solid State Drive</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Graphics Coprocessor</span>
                                                <span class="details">Intel Integrated Graphics</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Graphics Card Description</span>
                                                <span class="details">Integrated Graphics Card</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Hardware Platform</span>
                                                <span class="details">Mac</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Operating System</span>
                                                <span class="details">Mac OS</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Average Battery Life (in hours)</span>
                                                <span class="details">9</span>
                                            </div>
                                        </li>
                                    </ul><!-- //.product specification -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="descr" role="tabpanel" aria-labelledby="descr-tab">
                                <div class="descr-tab-content">
                                    <h4 class="title">Product Descriptions</h4>
                                    <p><?php echo $row_product['name'] ?></p>
                                        <p><?php echo $row_product['description'] ?></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="method" role="tabpanel" aria-labelledby="method-tab">
                                <div class="more-feature-content">
                                    <h4 class="title">More Features</h4>
                                    <div class="feature-list-wrapper">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncove
                                        many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                        and the like) Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum
                                        will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                        (injected humour and the like)..</p>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- product details content area end -->
<!-- recently added start -->
<div class="recently-added-area product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recently-added-nav-menu"><!-- recently added nav menu -->
                    <ul>
                        <li>recently added</li>
                    </ul>
                </div><!-- //.recently added nav menu -->
            </div>
            <div class="col-lg-12">
                <div class="recently-added-carousel" id="recently-added-carousel"><!-- recently added carousel -->
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/09.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">accesories</a>
                            <h4 class="title">Milo Hoverboard</h4>
                            <div class="price"><span class="sprice">$7.00</span> <del class="dprice">$42.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/10.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Bike</a>
                            <h4 class="title">Dart Moto Bike</h4>
                            <div class="price"><span class="sprice">$30.00</span> <del class="dprice">$45.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/11.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$120.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/12.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">hat</a>
                            <h4 class="title">Red Yello Hat</h4>
                            <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$156.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/03.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$90.00</del></div>
                        </div>
                    </div>
                </div><!-- //. recently added carousel -->
            </div>
        </div>
    </div>
</div>
<!-- recently added end -->
<div class="body-overlay" id="body-overlay"></div>
<?php
include_once "./assets/designs/searchbar.php";

 include_once './assets/designs/table_rating.php';
 include_once './assets/designs/carts.php';

 include_once './assets/designs/footer.php';

?>