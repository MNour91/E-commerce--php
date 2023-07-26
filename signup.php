
<?php

include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Signup</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Signup</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- login page content area start -->
<div class="login-page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="signup-page-wrapper"><!-- login page wrapper -->
                    <div class="or">
                        <span>or</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 padding-right-0">
                            <div class="left-content-area signup-bg">
                                <div class="img-wrapper">
                                        <a href="#" class="boxed-btn">create an account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-contnet-area">
                                <div class="top-content">
                                    <h4 class="title">Signup Today</h4>
                                    <p>Our heartiest welcome goes to you. Thanks for being a proud customer of our unique and ever-expanding line of products! We’re honored to have you with us always!</p>
                                </div>
                                <div class="bottom-content">
                                    <form action="./admin/functions/add_customer.php" method="post" class="login-form">
                                    <div class="form-element">
                                            <input type="text" class="input-field" name='name' placeholder="Enter Username " require>
                                        </div>
                                        <div class="form-element">
                                            <input type="email" class="input-field" name='email' placeholder="Enter Email" require>
                                        </div>
                                        <div class="form-element">
                                            <input type="password" class="input-field" name='password' placeholder="Enter Password" require>
                                        </div>
                                        <div class="form-element">
                                            <input type="number" class="input-field" name='phone' placeholder="Enter phone" require>
                                        </div>
                                        <div class="form-element">
                                            <input type="text" class="input-field" name='address' placeholder="Enter address" require>
                                        </div>
                                        <div class="btn-wrapper">
                                            <!-- <button type="submit" class="submit-btn">signup</button> -->
                                            <input type="submit" name="submit" value="signup" class="submit-btn">
                                            <a href="login.php" class="link">Already have account?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.login page wrapper -->
            </div>
        </div>
    </div>
</div>
<!-- login page content area end -->
<?php
 include_once './assets/designs/footer.php';

?>