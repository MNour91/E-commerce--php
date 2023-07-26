
<?php
$active = "index";
 include_once './assets/designs/header.php';
?>
<!-- header area start -->
<div class="header-area header-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-inner "><!-- header inner -->
                    <span class="subtitle">Get 50% Off in summer</span>
                    <h1 class="title">Seasonal Offers.</h1>
                    <p class="wow fadeInDown">Stock up on sportswear and limited edition collections on
                        our awesome mid-season sale.</p>
                        <div class="btn-wrapper">
                            <a href="category.php" class="boxed-btn">View Collections</a>
                            <a href="about.php" class="boxed-btn blank">learn more</a>
                        </div>
                </div><!-- //. header inner -->
            </div>
        </div>
    </div>
</div>
<!-- header area end -->
<div class="body-overlay" id="body-overlay"></div>
<?php
include_once "./assets/designs/searchbar.php";

include_once './assets/designs/table_rating.php';

 include_once './assets/designs/carts.php';


?>

<!-- new product area start -->
<section class="new-product-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title"><!-- section title --> 
                    <span class="subtitle">New Products</span>
                    <h2 class="title">New Collections</h2>
                </div><!-- //. section title -->
            </div>
        </div>
                        <?php
                            $select = 'SELECT * FROM products';
                            $ruseltt = $connect ->query($select);
                            $num_pro = $ruseltt -> num_rows;
                            $num_page = ceil($num_pro / 8) ;

                        ?>
          <div class="row">
                        <?php
                             if(!isset($_GET['id'])){
                                $select_pro = 'SELECT * FROM products ORDER BY id DESC LIMIT 8 offset 0';
                             }
                             else {
                               $id =  $_GET['id'] ;
                               $num = $id * 8;
                               $select_pro = "SELECT * FROM products ORDER BY id DESC LIMIT 8 offset $num ";
                             }
                            
                           $show_prouduct = $connect -> query($select_pro);                         
                           foreach($show_prouduct as $row_pro){
 
                           ?>

                            <div class="col-lg-3 col-md-6">
                                <div class="single-new-collection-item ">
                                    <div class="thumb">
                                        <img src="./admin/product_img/<?php echo $row_pro['main_img'] ?>" alt="new collcetion image" height="300px" width="540px">
                                        <div class="hover">
                                            <!-- <a data_id="<?php// echo $row_pro['id']?>"  class="addtocart">Add To Cart</a> -->
                                            <a class="btn btn-primary add-order addtocart" data-id="<?php echo$row_pro['id']?>">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">
                                            <?php 
                                            if($row_pro['type_product'] == 7){
                                                echo 'Mobile Phones';
                                            }elseif($row_pro['type_product'] == 1){
                                                echo 'Electronics';
                                            }elseif($row_pro['type_product'] == 2){
                                                echo 'Fashion';
                                            }elseif($row_pro['type_product'] == 3){
                                                echo 'computers';
                                            }elseif($row_pro['type_product'] == 4){
                                                echo 'Toys,Games';
                                            }elseif($row_pro['type_product'] == 5){
                                                echo 'books';
                                            }else{
                                                echo 'Home & furniture';
                                            }
                                            
                                            
                                            
                                        ?></span>
                                        <a href="product-details.php?id=<?php echo $row_pro['id']?>"><h4 class="title"><?php echo $row_pro['name']; ?> </h4></a>
                                        <div class="price"><span class="sprice"><?php echo $row_pro['price'] -  $row_pro['discount'] ; ?>$</span> <del class="dprice"><?php echo $row_pro['price'] ?> $</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                        <?php }?>

                        

         </div>
    </div>
</section>
<!-- new product area end -->
                <div class = "m-3" >                           
                            <?php 
                                 for ($i=0; $i <$num_page ; $i++) { 
                            ?>
                                <a href="?id=<?php echo $i ?>" class = "btn btn-dark" ><?php echo $i+1 ?></a>

                            <?php
                            }
                            ?>                
                        </div>  
<!-- ladies cloths area start -->
<section class="ladies-cloths-area ladies-cloths-bg">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="ladies-cloths-content-area"><!-- ladies cloths content area -->
                    <div class="countdown-area"><!-- countdown area start -->
                        <ul>
                            <li>
                                <div class="single-countdown-box"><!-- single countdown box -->
                                    <div class="day" id="days">03</div>
                                    <span class="title">Days</span>
                                </div><!-- //.single countdown box -->
                            </li>
                            <li>
                                <div class="single-countdown-box"><!-- single countdown box -->
                                    <div class="day" id="hours">12</div>
                                    <span class="title">hours</span>
                                </div><!-- //.single countdown box -->
                            </li>
                            <li>
                                <div class="single-countdown-box"><!-- single countdown box -->
                                    <div class="day" id="miniutes">17</div>
                                    <span class="title">miniutes</span>
                                </div><!-- //.single countdown box -->
                            </li>
                            <li>
                                <div class="single-countdown-box"><!-- single countdown box -->
                                    <div class="day" id="seconds">45</div>
                                    <span class="title">seconds</span>
                                </div><!-- //.single countdown box -->
                            </li>
                        </ul>
                    </div><!-- //. countdown area -->
                    <div class="bottom-content">
                        <span class="subtitle">Get 35% Off in summer</span>
                        <h3 class="title">Ladies Cloths</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                        <a href="category.php" class="boxed-btn">view collections</a>
                    </div>
                </div><!-- //.ladies cloths content area -->
            </div>
        </div>
    </div>
</section>
<!-- ladies cloths area end -->

<!-- best sellers area start -->
<section class="best-sellers-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title"><!-- section title --> 
                    <span class="subtitle">Trending products</span>
                    <h2 class="title">Our Best Sellers</h2>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="best-sellter-filter-menu"><!-- best seller filter menu -->
                      <ul class="nav nav-tabs"  role="tablist">
                          <li class="nav-item">
                                <a class="nav-link active" id="bestseller-tab" data-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="true">best sellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendeseller-tab" data-toggle="tab" href="#trendeseller" role="tab" aria-controls="trendeseller" aria-selected="false">trending sellers</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">new sellers</a>
                        </li>
                      </ul>  
                </div><!-- //.best seller filter menu -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="best-sellter-filter">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                                <div class="row">
                                               <?php
                                                    $select_prod = 'SELECT * FROM products ';
                                                    $ruseltt = $connect ->query($select_prod);
                                                    foreach($ruseltt as $row_prod){

                                                    
                                                ?>
                                        <div class="col-lg-3 col-md-6">
                                        
                                                <div class="single-new-collection-item "><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="./admin/product_img/<?php echo $row_prod['main_img'] ?>" alt="new collcetion image" height="300px" width="540px">
                                                        <div class="hover">
                                                            <a href="product-details.php?id=<?php echo $row_prod['id']?>" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"> <?php 
                                                            if($row_prod['type_product'] == 7){
                                                                echo 'Mobile Phones';
                                                            }elseif($row_prod['type_product'] == 1){
                                                                echo 'Electronics';
                                                            }elseif($row_prod['type_product'] == 2){
                                                                echo 'Fashion';
                                                            }elseif($row_prod['type_product'] == 3){
                                                                echo 'computers';
                                                            }elseif($row_prod['type_product'] == 4){
                                                                echo 'Toys,Games';
                                                            }elseif($row_prod['type_product'] == 5){
                                                                echo 'books';
                                                            }else{
                                                                echo 'Home & furniture';
                                                            }
                                                            
                                                            
                                                            
                                                        ?></span>
                                                        <a href="product-details.php?id=<?php echo $row_prod['id']?>"><h4 class="title"><?php echo $row_prod['name']; ?></h4></a>
                                                        <div class="price"><span class="sprice"><?php echo $row_prod['price'] -  $row_prod['discount'] ; ?>$</span> <del class="dprice"><?php echo $row_prod['price'] ?> $</del></div>
                                                    </div>
                                                </div>
                                                 <!-- //. single new collections  -->
                                        </div>
                                        <?php } ?>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="trendeseller" role="tabpanel" aria-labelledby="trendeseller-tab">
                            <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item "><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/01.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">shoe</span>
                                                    <a href="product-details.php"><h4 class="title">Footwear Dark</h4></a>
                                                    <div class="price"><span class="sprice">$53.00</span> <del class="dprice">$95.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/02.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">accesories</span>
                                                <a href="product-details.php"><h4 class="title">Milo Hoverboard</h4></a>
                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/03.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">shoe</span>
                                                <a href="product-details.php"> <h4 class="title">Lobina Perak Shoe</h4></a>
                                                <div class="price"><span class="sprice">$78.00</span> <del class="dprice">$95.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/04.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">sportswear</span>
                                                <a href="product-details.php"><h4 class="title">Black Tshirt Brock</h4></a>
                                                <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/05.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">hat</span>
                                                <a href="product-details.php"> <h4 class="title">Red Yello Hat</h4></a>
                                                <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/06.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">cycle</span>
                                                <a href="product-details.php"><h4 class="title">Minimal Cycle</h4></a>
                                                <div class="price"><span class="sprice">$200.00</span> <del class="dprice">$450.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/07.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">bike</span>
                                                <a href="product-details.php"><h4 class="title">Dart Moto Bike</h4></a>
                                                <div class="price"><span class="sprice">$980.00</span> <del class="dprice">$1500.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb">
                                                <img src="assets/img/new-collections/08.jpg" alt="new collcetion image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add To Cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="category">electric</span>
                                                <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                                <div class="price"><span class="sprice">$47.00</span> <del class="dprice">$99.00</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                                <div class="single-new-collection-item "><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/new-collections/01.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">shoe</span>
                                                        <a href="product-details.php"><h4 class="title">Footwear Dark</h4></a>
                                                        <div class="price"><span class="sprice">$53.00</span> <del class="dprice">$95.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/02.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">accesories</span>
                                                    <a href="product-details.php"><h4 class="title">Milo Hoverboard</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/03.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">shoe</span>
                                                    <a href="product-details.php"> <h4 class="title">Lobina Perak Shoe</h4></a>
                                                    <div class="price"><span class="sprice">$78.00</span> <del class="dprice">$95.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/04.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">sportswear</span>
                                                    <a href="product-details.php"><h4 class="title">Black Tshirt Brock</h4></a>
                                                    <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/05.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">hat</span>
                                                    <a href="product-details.php"> <h4 class="title">Red Yello Hat</h4></a>
                                                    <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/06.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">cycle</span>
                                                    <a href="product-details.php"><h4 class="title">Minimal Cycle</h4></a>
                                                    <div class="price"><span class="sprice">$200.00</span> <del class="dprice">$450.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/07.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">bike</span>
                                                    <a href="product-details.php"><h4 class="title">Dart Moto Bike</h4></a>
                                                    <div class="price"><span class="sprice">$980.00</span> <del class="dprice">$1500.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-new-collection-item"><!-- single new collections -->
                                                <div class="thumb">
                                                    <img src="assets/img/new-collections/08.jpg" alt="new collcetion image">
                                                    <div class="hover">
                                                        <a href="#" class="addtocart">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="category">electric</span>
                                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$47.00</span> <del class="dprice">$99.00</del></div>
                                                </div>
                                            </div><!-- //. single new collections  -->
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- best sellers area end -->

<!-- free shipping area start -->
<section class="free-shipping-area shipping-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content-area"><!-- left content area -->
                    <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h2 class="title">Free Shipping
                            <br/>Wordwide.</h2>
                </div><!-- //. left contetnt area -->
                <div class="right-content-area"><!-- right content aera -->
                    <div class="btn-wrapper">
                            <a href="checkout.php" class="boxed-btn">show now</a>
                    </div>
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</section>
<!-- free shipping area end -->

<!-- feature area one start -->
<section class="feature-one-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">get 45% off</span>
                        <h3 class="title">Featured</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/01.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/02.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/03.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/04.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">get 45% off</span>
                        <h3 class="title">Best Seller</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/05.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/06.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/07.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one "><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/08.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="product-details.php"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">Product intro</span>
                        <h3 class="title">Offer Ad</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="banner-add">
                                <a href="offers.php"><img src="assets/img/banner-add/01.jpg" alt="banner image"></a>
                            </div>
                        </li>
                        <li>
                            <div class="banner-add">
                                <a href="offers.php"><img src="assets/img/banner-add/02.jpg" alt="banner image"></a>
                            </div>
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
        </div>
    </div>
</section>
<!-- feature area one end -->

<?php
 include_once './assets/designs/footer.php';

?>