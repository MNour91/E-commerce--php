
<?php
$active = "contact";
include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Contact</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- contact infor area start -->
<div class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="left-content-area">
                    <div class="inner-section-title">
                        <span class="subtitle">Contact us</span>
                        <h2 class="title">For Get Updates</h2>
                    </div>
                    <ul>
                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Don't Hesitate To Contact Us!</span>
                                    <span class="title">+ (123) 1800-567-8990</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>
                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Mon - Fri: 9:00 - 19:00 / <span class="base-color">Closed on Friday</span></span>
                                    <span class="title">Working time</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>
                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">New York, 10 Hudson Yards</span>
                                    <span class="title">Company Headquarters</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>
                        <li>
                            <div class="single-contact-info-item"><!-- single contact info item -->
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <span class="subtitle">Get In Touch With Us</span>
                                    <span class="title">info@bigenza.com</span>
                                </div>
                            </div><!-- //.single contact info item -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="map-wrapper">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact infor area end -->

<!-- contact form area start -->
<section class="contact-form-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title-two"><!-- section title two -->
                    <span class="subtitle">on your mind</span>
                    <h2 class="title">Get In Touch</h2>
                </div><!-- //. section title two -->
            </div>
        </div>






        <form  class="contact_form myform" id="get_in_touch">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-element margin-bottom-20">
                        <input type="text" id="first_name" class="input-field" placeholder="Enter first name">
                    </div>
                    <div class="form-element margin-bottom-20">
                        <input type="text" id="last_name" class="input-field" placeholder="Enter last name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-element margin-bottom-20">
                        <input type="text" id="email" class="input-field" placeholder="Enter email address">
                    </div>
                    <div class="form-element margin-bottom-20">
                        <input type="text" id="subject" class="input-field" placeholder="Enter subject">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-element textarea margin-bottom-20">
                        <textarea  id="message" cols="30" rows="10" placeholder="Enter message" class="input-field textarea"></textarea>
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
                <button type="submit" class="submit-btn">Send now</button>
            </div>
            <div class="sent"></div>
        </form>




    </div>
</section>
<!-- contact form area end -->

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