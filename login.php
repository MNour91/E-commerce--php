
<?php
$active = "login";
include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Login</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Login</li>
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
                <div class="login-page-wrapper"><!-- login page wrapper -->
                    <div class="or">
                        <span>or</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-content-area">
                                <div class="top-content">
                                    <h4 class="title">Welcome Back </h4>
                                    <p>Our cordial welcome goes to you! Thank you for trusting us and appreciating our venture! </p>
                                </div>
                                <div class="bottom-content">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <img src="assets/img/ecshop.jfif" alt="login image" height='100px' width='150px'>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <ul>
                                            <li >
                                                <a href="#">Login </a>
                                            </li>
                                            <li class="active">
                                                <a href="signup.php">Sign Up</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-contnet-area">
                                <div class="top-content">
                                    <h4 class="title">Account Login</h4>
                                    <p>Our heartiest welcome goes to you. Thanks for being a proud customer of our unique and ever-expanding line of products! We’re honored to have you with us always!</p>
                                </div>
                                <div class="bottom-content">
                                    <form action="admin/functions/customer_login.php" method="post" class="login-form">
                                        <div class="form-element">
                                            <input type="email" name="email" class="input-field" placeholder="Enter Email">
                                        </div>
                                        <div class="form-element">
                                            <input type="password" name="password" class="input-field" placeholder="Enter Password">
                                        </div>
                                        <div class="btn-wrapper">
                                            <!-- <button type="submit" class="submit-btn">Login</button> -->
                                            <input type="submit" name="submit" value="Login" class="submit-btn">
                                            <a href="#" class="link">Forget password?</a>
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