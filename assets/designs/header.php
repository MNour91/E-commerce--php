<?php
require "./admin/functions/db_connect.php";
session_start();
if (!isset($_COOKIE['count']))
{
    setcookie('count','traffic', time()+60*60*24*30 ,'/');
 
 $up_count = $connect ->query("UPDATE visit SET count = count+1");
}

?>
<!DOCTYPE >
<html lang="en">

<!-- Mirrored from idealbrothers.thesoftking.com//bigenza/bigenja/index. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:37:35 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bigenja | Online Shopping Ecommerce Cart  Template </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .star{
           color: #ffb400;
        }
    </style>

</head>

<body> 
    
<!-- top add area start -->
<div class="top-add-area">
    <a href="#"><img src="assets/img/top-bar-add.jpg" alt="top bar add image"></a>
</div>
<!-- top add area end -->

<!-- support bar area start -->
<div class="support-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content-area"><!-- left content area -->
                <div class="language-picker">
                    <div class="default">
                        <div class="slang-wrap">
                            <div class="img">
                                <img src="assets/img/lang-flag/enf.jpg" alt="language flag">
                            </div>
                            <div class="name">English <i class="fas fa-angle-down"></i></div>
                        </div>
                        <ul class="all-lang">
                                <li>
                                    <div class="slang-wrap">
                                        <div class="img">
                                            <img src="assets/img/lang-flag/fer.jpg" alt="language flag">
                                        </div>
                                        <div class="name">Frence </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slang-wrap">
                                        <div class="img">
                                            <img src="assets/img/lang-flag/ger.jpg" alt="language flag">
                                        </div>
                                        <div class="name">German </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slang-wrap">
                                        <div class="img">
                                            <img src="assets/img/lang-flag/ind.jpg" alt="language flag">
                                        </div>
                                        <div class="name">Hindi </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </div>
                <div class="currency-picker">
                    <div class="default">
                        <div class="slang-wrap">
                            <div class="name">USD <i class="fas fa-angle-down"></i></div>
                        </div>
                        <ul class="all-lang">
                                <li>
                                    <div class="slang-wrap">
                                        <div class="name">IND </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slang-wrap">
                                        <div class="name">AUD </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slang-wrap">
                                        <div class="name">EUR </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </div>
                   
                </div><!-- //.left content area -->
                <div class="right-content-area"><!-- right content area -->
                    <ul>
                        <li>
                            Ordered before 17:30, shipped today
                        </li>
                        <li>
                            <i class="fas fa-truck"></i>  Free Shipping
                        </li>
                        <li>
                            <i class="fas fa-clock"></i> 24/7 Online Support
                        </li>
                    </ul>
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</div>
<!-- support bar area end -->

<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light ">
        <div class="container nav-container">
            <div class="logo-wrapper navbar-brand">
                <a href="index.php" class="logo main-logo">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mirex">
                <!-- navbar collapse start -->
                <ul class="navbar-nav">
                    <!-- navbar- nav -->
                    <li class="nav-item <?php if($active == 'index'){echo 'active';}  ?> ">
                        <a class="nav-link pl-0 " href="index.php" >Home
                            <span class="sr-only">(current)</span>
                        </a>
                        
                    </li>
                    <li class="nav-item <?php if($active == 'about'){echo 'active';}  ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                        <div class="mega-menu-wrapper">
                            <div class="container mega-menu-container">
                                <div class="row">
                                  <div class="col-lg-3 col-sm-12">
                                    <div class="mega-menu-columns">
                                        <h6 class="title">Inner Pages</h6>
                                        <ul class="menga-menu-page-links">
                                            <li><a href="category.php">Category</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            
                                            
                                            <li><a href="sellers-products.php">Sellers Products</a></li>
                                            <li><a href="seller-dashboard.php">Sellers Dashboard</a></li>
                                        </ul>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Other Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="product_upload.php">Product Upload</a></li>
                                                <li><a href="offers.php">Offer</a></li>
                                                <li><a href="invoice.php">Invoice</a></li>
                                                <li><a href="vendor-list.php">Vendor List</a></li>
                                                <li><a href="partners.php">Partners</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                            </ul>
                                        </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Other Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="search.php">Search</a></li>
                                                <li><a href="become-affiliats.php">Become Affiliant</a></li>
                                                <li><a href="faq.php">Faq</a></li>
                                                <li><a href="track-orders.php">Track Order</a></li>
                                                <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <a href="product-details.php">
                                            <img src="assets/img/mega-menu.jpg" alt="product image">
                                        </a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </li><!-- mega menu start -->
                    <li class="nav-item dropdown <?php if($active == 'blog'){echo 'active';}  ?> ">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.php" class="dropdown-item">Blog</a>
                         
                        </div>
                    </li>
                    <li class="nav-item <?php if($active == 'contact'){echo 'active';}  ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item  dropdown <?php if($active == 'login'){echo 'active';} ?>" <?php if(isset($_SESSION['customer_login'])){
                       echo "hidden";
                        }?> >
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">login</a>    
                    <div class="dropdown-menu">
                        <a href="login.php"  class="dropdown-item">Login</a>
                        <a href="signup.php"  class="dropdown-item">Signup</a>
                        </div>
                    </li>
                    <li class="nav-item  dropdown" <?php if(!isset($_SESSION['customer_login'])){
                       echo "hidden";
                        }?> >
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><?php
                        $id = $_SESSION['customer_login'];
                        $show_customer = $connect -> query("SELECT * FROM customer WHERE id = '$id'");
                        $row_customer = $show_customer -> fetch_assoc();
                        echo $row_customer['email'];

                        ?></a>    
                    <div class="dropdown-menu">
                        <a href="admin/functions/logout_customer.php"  class="dropdown-item">logout</a>
                        </div>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
           
            <!-- /.navbar btn wrapper -->
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex" aria-controls="mirex"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="right-btn-wrapper">
                <ul>
                    <li class="search" id="search"><i class="fas fa-search"></i> </li>
                    <li class="cart" id="cart"> <i class="fas fa-shopping-basket"></i> 
                        <span class="badge cunt_item"> <?php   
                        if(isset($_SESSION['customer_login'])){
                            $id = $_SESSION['customer_login'];
                            $count_it = $connect ->query("select * from orders where customer_id ='$id'");
                            echo $count = $count_it ->num_rows;

                        }else{
                            echo 0;
                        }
                        
                        
                        ?>        </span>
                        </li>
                    <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
                </ul>
            </div>
            <!-- navbar collapse end -->
        </div>
    </nav>
<!-- navbar area end -->
