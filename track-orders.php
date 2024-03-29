
<?php

include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Track Orders</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Track Orders</li>
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
<!-- order track page content area start -->
<section class="order-track-page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="track-order-form-wrapper"><!-- track order form -->
                    <h3 class="title">Track Your Order From Here</h3>
                    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/track-orders.html" class="track-order-form">
                        <div class="form-element">
                            <input type="text" class="input-field" placeholder="Type your order number...">
                        </div>
                        <button type="submit" class="submit-btn"><i class="fas fa-truck"></i> Track order</button>
                    </form>
                </div><!-- //. track order form -->
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="order-track-tab-nav"><!-- order track tab nav -->
                <div class="left-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="notfound-tab" data-toggle="tab" href="#notfound" role="tab" aria-controls="notfound" aria-selected="true">Not Found(5)</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="transport-tab" data-toggle="tab" href="#transport" role="tab" aria-controls="transport" aria-selected="false">In Transport(5) </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pickup-tab" data-toggle="tab" href="#pickup" role="tab" aria-controls="pickup" aria-selected="false">Pickup(2) </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="undelivered-tab" data-toggle="tab" href="#undelivered" role="tab" aria-controls="undelivered" aria-selected="false">Undeliver(5) </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="delivered-tab" data-toggle="tab" href="#delivered" role="tab" aria-controls="delivered" aria-selected="false">Deliver(5) </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="alert-tab" data-toggle="tab" href="#alert" role="tab" aria-controls="alert" aria-selected="false">Aleart(0) </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="expiredd-tab" data-toggle="tab" href="#expiredd" role="tab" aria-controls="expiredd" aria-selected="false"> Expired(0) </a>
                        </li>
                      </ul>
                </div>
                <div class="right-content">
                    <ul>
                        <li><a href="#"><i class="fas fa-copy"></i></a></li>
                        <li><a href="#"><i class="fas fa-paste"></i></a></li>
                        <li><a href="#"><i class="fas fa-redo-alt"></i></a></li>
                        <li><a href="#"><i class="fas fa-arrows-alt-v"></i></a></li>
                    </ul>
                </div>
            </div><!-- //.order track tab nav -->
            <div class="order-track-tab-content"><!-- order track tab content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="notfound" role="tabpanel" aria-labelledby="notfound-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                    <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                    <div class="tab-pane fade" id="pickup" role="tabpanel" aria-labelledby="pickup-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                    <div class="tab-pane fade" id="undelivered" role="tabpanel" aria-labelledby="undelivered-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                    <div class="tab-pane fade" id="delivered" role="tabpanel" aria-labelledby="delivered-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                    <div class="tab-pane fade" id="alert" role="tabpanel" aria-labelledby="alert-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                    <div class="tab-pane fade" id="expiredd" role="tabpanel" aria-labelledby="expiredd-tab">
                        <div class="track-tab-content-inner"><!-- track tab content inner -->
                            <table class="table table-default table-responsive">
                                <tbody>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Undeliver</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Pickup</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">Alert</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                    <tr>
                                        <td>+ADSFADSFB89709</td>
                                        <td>TheSoftKing Computer</td>
                                        <td><strong>Rex Rifat</strong></td>
                                        <td><span class="base-color">In Transport</span></td>
                                        <td>01/09/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- //.track tab content inner -->
                    </div>
                  </div>
            </div><!-- //.order track tab content -->
        </div>
    </div>
    </div>
</section>
<!-- order track page content area end -->

<!-- how it works area start -->
<section class="how-it-works-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title-two">
                    <span class="subtitle">See it</span>
                    <h2 class="title">How It Works</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-coin-box yellow wow  slideInLeft">
                    <div class="icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="content">
                        <h4>Place Your Order</h4>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-coin-box blue wow slideInDown">
                    <div class="icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="content">
                        <h4>Track Your Booking</h4>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-coin-box green wow slideInUp">
                    <div class="icon">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <div class="content">
                        <h4>Get Delivered</h4>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-coin-box red wow slideInRight">
                    <div class="icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="content">
                        <h4>Enjoy</h4>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how it works area end -->

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