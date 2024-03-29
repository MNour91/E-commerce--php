
<?php

include_once './assets/designs/header.php';

?><!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Seller Dashboard</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Seller Dashboard</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- seller dashboard content area start -->
<div class="seller-dashboard-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card dashboard-content-wrapper card-default gray-bg">
                    <div class="card-header">
                            DASHBOARD
                    </div>
                    <div class="mini-card-wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-mini-card-item bg-light-blue">
                                    <div class="bg-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <h4 class="title">Current Balance</h4>
                                    <div class="counterup">$<span class="count">90.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-mini-card-item bg-light-green">
                                    <div class="bg-icon">
                                            <i class="fas fa-chart-line"></i>                                          
                                    </div>
                                    <h4 class="title">Total earnings</h4>
                                    <div class="counterup">$<span class="count">5,744.27</span></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-mini-card-item bg-light-orange">
                                    <div class="bg-icon">
                                            <i class="fas fa-shopping-cart"></i> 
                                    </div>
                                    <h4 class="title">Total orders</h4>
                                    <div class="counterup">30</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-mini-card-item bg-light-gray">
                                    <div class="bg-icon">
                                            <i class="fas fa-eye"></i>
                                    </div>
                                    <h4 class="title">Total views</h4>
                                    <div class="counterup">1009</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="seller-card">
                                    <div class="card-header">
                                            Sales analytics
                                    </div>
                                    <div class="sales-cart-area">
                                        <canvas id="chartChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="row">
                                   <div class="col-lg-6 col-md-6">
                                        <div class="seller-card">
                                            <div class="card-header">
                                                    Top selling products
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="heading">Footwear Dark</a>
                                                        <span class="right">$390.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Milo Hoverboard</a>
                                                        <span class="right">$80.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Lobina Perak Shoe</a>
                                                        <span class="right">$30.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Black Tshirt Brock</a>
                                                        <span class="right">$20.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Red Yello Hat</a>
                                                        <span class="right">$05.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Minimal Cycle</a>
                                                        <span class="right">$700.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Dart Moto Bike</a>
                                                        <span class="right">$980.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Minimal Screw</a>
                                                        <span class="right">$90.00</span>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="heading">Screw Minimal </a>
                                                        <span class="right">$70.00</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            
                                        </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6">
                                        <div class="seller-card">
                                            <div class="card-header">
                                                    Most viewed products
                                            </div>
                                            <div class="card-body">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="heading">Footwear Dark</a>
                                                            <span class="right">12358</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Milo Hoverboard</a>
                                                            <span class="right">12000</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Lobina Perak Shoe</a>
                                                            <span class="right">11985</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Black Tshirt Brock</a>
                                                            <span class="right">10258</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Red Yello Hat</a>
                                                            <span class="right">9581</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Minimal Cycle</a>
                                                            <span class="right">9325</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Dart Moto Bike</a>
                                                            <span class="right">6584</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Minimal Screw</a>
                                                            <span class="right">5248</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="heading">Screw Minimal </a>
                                                            <span class="right">$70.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="latest-order">
                                        <div class="table-panel">
                                        <div class="card-header">
                                            latest orders
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-responsive seller-dashboard-table">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Customer</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Lesa Patterson </td>
                                                        <td><span class="base-color">Pending</span> </td>
                                                        <td>$101.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Lesa Patterson </td>
                                                        <td>Proccessing </td>
                                                        <td>$101.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Lesa Patterson </td>
                                                        <td><span class="base-color">Pending</span> </td>
                                                        <td>$101.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Lesa Patterson </td>
                                                        <td><span class="base-color">Pending</span> </td>
                                                        <td>$101.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="latest-invoice">
                                        <div class="table-panel">
                                        <div class="card-header">
                                            latest invoices
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-responsive seller-dashboard-table">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Type</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Payout</td>
                                                        <td>LesaPatterson</td>
                                                        <td>unpaid</td>
                                                        <td>$130.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Payout</td>
                                                        <td>LesaPatterson</td>
                                                        <td><span class="base-color">Paid</span> </td>
                                                        <td>$130.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Payout</td>
                                                        <td>LesaPatterson</td>
                                                        <td><span class="base-color">Paid</span> </td>
                                                        <td>$130.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Payout</td>
                                                        <td>LesaPatterson</td>
                                                        <td>unpaid</td>
                                                        <td>$130.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09/07/2018 </td>
                                                        <td>Payout</td>
                                                        <td>LesaPatterson</td>
                                                        <td><span class="base-color">Paid</span> </td>
                                                        <td>$130.25</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="latest-message">
                                            <div class="table-panel">
                                            <div class="card-header">
                                                latest Shipment
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-responsive seller-dashboard-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Customer</th>
                                                            <th>Location</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td><span class="base-color">Shppied</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td><span class="base-color">Shppied</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td><span class="base-color">Shppied</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>09/07/2018 </td>
                                                            <td>Lesa </td>
                                                            <td>Dhaka,Bangladesh</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- seller dashboard content area end -->
<div class="body-overlay" id="body-overlay"></div>
<?php
include_once "./assets/designs/searchbar.php";
include_once './assets/designs/table_rating.php';

 include_once './assets/designs/carts.php';

 include_once './assets/designs/footer.php';

?>