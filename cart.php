
<?php

include_once './assets/designs/header.php';

?>
<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Cart</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Cart</li>
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
<!-- cart sidebar area end -->
<!-- cart contetn area start -->
<div class="cart-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-content-inner"><!-- cart content inner -->
                    <div class="top-content"><!-- top content -->
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>agreement</th>
                                    <th>Date order</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(isset($_SESSION['customer_login'])){

                               
                                $id = $_SESSION['customer_login']; 
                                $ruselt = $connect ->query("SELECT * FROM orders WHERE customer_id ='$id'" );
                                foreach($ruselt as $row_order){                              
                            ?>
                              <tr>
                                             <?php  $id_pro =   $row_order["product_id"];
                                              $show_pro = $connect ->query("SELECT * FROM products WHERE id ='$id_pro'");
                                              $view = $show_pro ->fetch_assoc();
                                            ?>
                                    <td>
                                    
                                        <div class="product-details"><!-- product details -->
                                            <div class="close-btn cart-remove-item">
                                            <a data-d="<?php echo$row_order['id']?>" class="delete-order"> <i class="fas fa-times"></i></a>
                                            </div>
                                            <div class="thumb">
                                                <img src="./admin/product_img/<?php echo $view['main_img'] ?>" alt="cart image"  width="80px" height="80px">
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><?php echo $view['name'] ?></h4>
                                            </div>
                                        </div><!-- //. product detials -->
                                    </td>
                                    <td>
                                        <div class="price">$ <span class = 'price'><?php echo $view['price'] - $view['discount'];?></span></div>
                                    </td>
                                            
                                    <td>
                                        <div class="qty">
                                            <ul> 
                                                <li><span class="qtminus"><i class="fas fa-minus"></i></span></li>
                                                <li><span class="qttotal"><?php echo$row_order["quantity"];?></span></li>
                                                <li><span class="qtplus"><i class="fas fa-plus"></i></span></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price">$<?php //echo$row_order["quantity"] *($view['price'] - $view['discount'])?></div>
                                    </td>
                                    <td>
                                        <div class="price"><?php if($row_order['agreement']==0){echo "Not Agreeing";}else{echo "Agreeing";} ?></div>
                                    </td>
                                    <td>
                                        <div class="price"><?php echo$row_order["time_order"]?></div>
                                    </td>
                                </tr>
                     <?php    }
                      }?>
                            
                            </tbody>
                        </table>
                    </div><!-- //. top content -->
                    <div class="bottom-content"><!-- bottom content -->
                        <div class="left-content-area">
                            <div class="coupon-code-wrapper">
                                <div class="form-element">
                                    <input type="text" class="input-field" placeholder="Coupon Code">
                                </div>
                                <button type="button" class="submit-btn">apply coupon</button>
                            </div>
                        </div>
                        <div class="right-content-area">
                            <div class="btn-wrapper">
                                <button type="button" class="boxed-btn"> Update Cart </button>
                                <button type="button" class="boxed-btn"> Processed to checkout </button>
                            </div>
                            <div class="cart-total">
                               
                                <h3 class="title">Cart Totals</h3>
                                <ul class="cart-list">
                                    <li>Subtotal <span class="right">$</span></li>
                                    <li>Shipping </li>
                                    <li>Calculate shipping </li>
                                    <li>Tax (estimated for Bangladesh)	 <span class="right">$0.00</span></li>
                                    <li class="total">Total <span class="right">$</span></li>
                                </ul>
                            </div>
                           
                        </div>

                    </div><!-- //. bottom content -->
                </div><!-- //. cart content inner -->
            </div>
        </div>
    </div>
</div>
<!-- cart contetn area end -->

<!-- brand logo carousel area one start -->
<div class="brand-logo-carousel-area-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo-carousel-one" id="brand-logo-carousel-one"><!-- brand logo carousel one -->
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/01.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/02.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/03.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/04.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/05.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/06.png" alt="brand logo image">
                        </a>
                    </div>
                </div><!-- //.brand logo carousel one -->
            </div>
        </div>
    </div>
</div>
<!-- brand logo carousel area one end -->

<!-- best seller home 6 area small start -->
<div class="best-seller-home-6-area-small cart-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-seller-home-6-filter-menu-small"><!-- best seller home 6 filter menu small -->
                        <ul class="nav nav-tabs"  role="tablist">
                                <li class="nav-item">
                                      <a class="nav-link active" id="popular-tab_3" data-toggle="tab" href="#popular_3" role="tab" aria-controls="popular_3" aria-selected="true">popular item</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="bestseller-tab_3" data-toggle="tab" href="#bestseller_3" role="tab" aria-controls="bestseller_3" aria-selected="false">best sellers</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" id="featured-tab_3" data-toggle="tab" href="#featured_3" role="tab" aria-controls="featured_3" aria-selected="false">featured item</a>
                              </li>
                        </ul> 
                    </div><!-- //.best seller home 6 filter menu -->
                </div>
                <div class="col-lg-12">
                    <div class="best-seller-home-6-masonry-small"><!-- best seller home 6 masonry small -->
                        <div class="tab-content">
                                <div class="tab-pane fade show active" id="popular_3" role="tabpanel" aria-labelledby="popular-tab_3">
                                    <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bestseller_3" role="tabpanel" aria-labelledby="bestseller-tab_3">
                                        <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="featured_3" role="tabpanel" aria-labelledby="featured-tab_3">
                                        <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-rated-box-one"><!-- single rated box one -->
                                                            <div class="thumb">
                                                                <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                            </div>
                                                            <div class="content">
                                                                <ul class="ratings">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="far fa-star"></i></li>
                                                                </ul>
                                                                <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                                <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                            </div>
                                                        </div><!-- //.single rated box one -->
                                                    </div>
                                        </div>
                                </div>
                        </div>
                    </div><!-- //.best seller home 6 masonry small-->
                </div>
            </div>
        </div>
    </div>
    <!-- best seller home 6 area small end -->

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
<?php
 include_once './assets/designs/footer.php';

?>