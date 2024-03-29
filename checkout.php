
<?php

include_once './assets/designs/header.php';

?> <!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Checkout</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- checkout page content area start -->
<div class="checkout-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="notification-area"><!-- notification area -->
                    Returning customer? <a href="#">Click here to login</a>
                </div><!-- //.notification area -->
                <div class="notification-area"><!-- notification area -->
                    Have a coupon? <a href="#">Click here to enter your code</a>
                </div><!-- //.notification area -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content-area">
                    <h3 class="title">Billing Details</h3>
                    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/checkout.html" class="checkout-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-element">
                                    <label>First name <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="First name...">
                                </div>
                                <div class="form-element">
                                    <label>Company name <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="Company name...">
                                </div>
                                <div class="form-element">
                                    <label>Street address <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="Street address...">
                                </div>
                                <div class="form-element">
                                    <label>Town/City  <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="Enter town/city...">
                                </div>
                                <div class="form-element">
                                    <label>Phone Number <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="Phone number...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-element">
                                    <label>Last Name <span class="base-color">**</span></label>
                                    <input type="text" class="input-field" placeholder="Last name...">
                                </div>
                                <div class="form-element select has-icon">
                                    <label>Country <span class="base-color">**</span></label>
                                    <select class="input-field select ">
                                        <option value="0">Select Country</option>
                                        <option value="0">Bangladesh</option>
                                        <option value="0">India</option>
                                        <option value="0">Pakistan</option>
                                        <option value="0">UAE</option>
                                    </select>
                                    <div class="the-icon">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="form-element">
                                    <label class="blank"></label>
                                    <input type="text" class="input-field" placeholder="Address other...">
                                </div>
                                <div class="form-element select has-icon">
                                    <label>District  <span class="base-color">**</span></label>
                                    <select class="input-field select">
                                        <option value="0">Select District </option>
                                        <option value="0">Dhaka</option>
                                        <option value="0">Khulna</option>
                                        <option value="0">Pabna</option>
                                        <option value="0">Dinajpur</option>
                                    </select>
                                    <div class="the-icon">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="form-element">
                                    <label>Email address<span class="base-color">**</span></label>
                                    <input type="email" class="input-field" placeholder="Email address...">
                                </div>
                            </div>
                                
                            <div class="col-lg-12">
                                <div class="checkbox-element account">
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-inner">Create an account?
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="shipping-details"><!-- shipping details -->
                                    <h3 class="title">Shipping Details</h3>
                                    <div class="checkbox-element">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-inner">Ship to a different address?
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-element textarea">
                                        <label>Order notes</label>
                                        <textarea class="input-field textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div><!-- //. shipping details -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content-area">
                    <h3 class="title">Your Order</h3>
                    <ul class="order-list">
                        <li>
                            <div class="single-order-list heading">
                                Product <span class="right">Total</span>
                            </div>
                        </li>
                        <li class="name">
                            <div class="single-order-list">
                                Wireless Audio System Multiroom 360 	× 1 <span class="right">$3,299.00</span>
                            </div>
                        </li>
                        <li>
                            <div class="single-order-list title-bold">
                                Subtotal <span class="right normal">$3,299.00</span>
                            </div>
                        </li>
                        <li class="shipping">
                            <div class="single-order-list title-bold">
                                Shipping
                                <span class="normal-text">Enter your full address to see shipping costs.</span>
                            </div>
                        </li>
                        <li>
                            <div class="single-order-list title-bold">
                                Tax <span class="right normal">0</span>
                            </div>
                        </li>
                        <li>
                            <div class="single-order-list title-bold">
                                Total <span class="right normal">$3,299.00</span>
                            </div>
                        </li>
                    </ul>
                    <div class="checkbox-element account">
                        <div class="checkbox-wrapper">
                            <label class="checkbox-inner">Cash on delivery
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>
                    <div class="notify-area">
                        Pay with cash upon delivery.
                    </div>
                    <div class="credit-card-area">
                        <div class="left-content">
                            <div class="checkbox-element account">
                                <div class="checkbox-wrapper">
                                    <label class="checkbox-inner">Credit Card (Stripe)
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="right-content">
                            <ul>
                                <li>
                                    <img src="assets/img/payment-logo/01.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/02.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/03.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/04.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/05.png" alt="payment-logo">
                                </li>
                                <li>
                                    <img src="assets/img/payment-logo/06.png" alt="payment-logo">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="checkbox-element account">
                        <div class="checkbox-wrapper">
                            <label class="checkbox-inner">I’ve read and accept the <a href="#" class="base-color">terms & conditions *</a>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <button type="submit" class="submit-btn"> place your order </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout page content area end -->


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
<div class="best-seller-home-6-area-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="best-seller-home-6-filter-menu-small"><!-- best seller home 6 filter menu small -->
                    <ul>
                        <li data-filter=".popular">popular item</li>
                        <li class="active" data-filter="*">best sellers</li>
                        <li data-filter=".best">featured item</li>
                    </ul>
                </div><!-- //.best seller home 6 filter menu -->
            </div>
            <div class="col-lg-12 remove-col-padding">
                <div class="best-seller-home-6-masonry-small"><!-- best seller home 6 masonry small -->
                    <div class="col-lg-4 col-md-6 popular">
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
                    <div class="col-lg-4 col-md-6 best">
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
                    <div class="col-lg-4 col-md-6 popular">
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
                    <div class="col-lg-4 col-md-6 best">
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
                    <div class="col-lg-4 col-md-6 popular best">
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
                    <div class="col-lg-4 col-md-6 best">
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
                    <div class="col-lg-4 col-md-6 popular best">
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
                    <div class="col-lg-4 col-md-6 best">
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
                    <div class="col-lg-4 col-md-6 popular">
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
                    <div class="col-lg-4 col-md-6 best">
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
                    <div class="col-lg-4 col-md-6 best">
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
                    <div class="col-lg-4 col-md-6 popular">
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