
<?php

include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Search Page</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Search Page</li>
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
<!-- category content area start -->
<div class="category-content-area search-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="category-sidebar"><!-- category sidebar -->
                    <div class="category-filter-widget"><!-- category-filter-widget -->
                        <h4 class="title">Filter by <span class="right">+</span></h4>
                        <ul class="cat-list">
                            <li><a href="#">brand <span class="right">+</span></a></li>
                            <li><a href="#">GENARATION <span class="right">+</span></a></li>
                            <li><a href="#">SOCKETs <span class="right">+</span></a></li>
                            <li><a href="#">NUMBER OF CORE <span class="right">+</span></a></li>
                            <li><a href="#">CLOCK SPEED <span class="right">+</span></a></li>
                            <li><a href="#">PROCESSOR TYPE <span class="right">+</span></a></li>
                            <li><a href="#">CACHE MEMORY <span class="right">+</span></a></li>
                            <li><a href="#">OTHERS <span class="right">+</span></a></li>
                            <li><a href="#">PRICE <span class="right">+</span></a></li>
                        </ul>
                    </div><!-- //.category-filter-widget -->
                </div><!-- //. category sidebar -->
                <div class="category-compare margin-bottom-30">
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
                <div class="banner-img">
                    <a href="#">
                        <img src="assets/img/banner-add/08.jpg" alt="banner images">
                    </a>
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
                                <li class="grid icon "> 
                                        <i class="fas fa-th-large"></i>
                                </li>
                                <li class="grid icon active"> 
                                        <i class="fas fa-th-list"></i>
                                </li>
                            </ul>
                        </div>
                    </div><!-- //. top content -->
                    <div class="bottom-content"><!-- top content -->
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/01.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="#"><h4 class="title">Footwear Dark</h4></a>
                                        <div class="price"><span class="sprice">$53.00</span> <del class="dprice">$95.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/02.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="#"><h4 class="title">Milo Hoverboard</h4></a>
                                        <div class="price"><span class="sprice">$35.00</span> <del class="dprice">$50.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/03.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">Sportswear</span>
                                        <a href="#"><h4 class="title">Black Tshirt Brock</h4></a>
                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$35.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/04.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">Cycle</span>
                                        <a href="#"><h4 class="title">Minimal Cycle</h4></a>
                                        <div class="price"><span class="sprice">$52.00</span> <del class="dprice">$95.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/05.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">Bike</span>
                                        <a href="#"><h4 class="title">Dart Moto Bike</h4></a>
                                        <div class="price"><span class="sprice">$503.00</span> <del class="dprice">$905.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/06.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">hat</span>
                                        <a href="#"><h4 class="title">Red Yello Hat</h4></a>
                                        <div class="price"><span class="sprice">$32.00</span> <del class="dprice">$95.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/07.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="#"><h4 class="title">Minimal Cycle</h4></a>
                                        <div class="price"><span class="sprice">$25.00</span> <del class="dprice">$85.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/08.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">Footwear</span>
                                        <a href="#"><h4 class="title">Milo Hoverboard</h4></a>
                                        <div class="price"><span class="sprice">$53.00</span> <del class="dprice">$95.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
                                        <img src="assets/img/new-collections/01.jpg" alt="new collcetion image">
                                        <div class="hover">
                                            <a href="#" class="addtocart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="#"><h4 class="title">Footwear Dark</h4></a>
                                        <div class="price"><span class="sprice">$553.00</span> <del class="dprice">$955.00</del></div>
                                    </div>
                                </div><!-- //. single new collections  -->
                            </div>
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
<?php
 include_once './assets/designs/footer.php';

?>