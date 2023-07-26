<!-- cart sidebar area start -->
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
    <?php 
    if(isset($_SESSION['customer_login'])){
        $id = $_SESSION['customer_login'];  
        $ruselt = $connect ->query("SELECT * FROM orders WHERE customer_id ='$id'  ORDER BY id DESC LIMIT 4" );
        foreach($ruselt as $row_order){                              
     ?>
            <div class="single-product-item prod_cart"><!-- single product item -->
               <?php  $id_pro =   $row_order["product_id"];
                      $show_pro = $connect ->query("SELECT * FROM products WHERE id ='$id_pro'");
                 $view = $show_pro->fetch_assoc();
                     ?>
               <div class="thumb">
                    <img src="./admin/product_img/<?php echo $view['main_img'] ?>" alt="recent review" width="80px" height="80px">
                </div>
               
                <div class="content">
                <h4 class="title"  style="word-wrap: break-word ;width:180px"><?php echo $view['name'] ?></h4>
                    <div class="price"><span class="pprice">$<?php echo $row_order["quantity"] * $view['price']?></span> for <span style = "font-size:18px"><?php echo$row_order["quantity"]?>pieces </span></div>
                    <button  data-d="<?php echo$row_order['id']?>"  class="btn btn-danger delete-order" style = "height:33px; width :100%;font-size:15px">Remove</button>
                </div>
            </div><!-- //. single product item -->
     <?php
            
        }
    }  
    ?>
           
        </div> <!-- //. cart product -->
        <div class="btn-wrapper" style="postion:fixed">
                <a href="checkout.php" class="boxed-btn">Checkout</a>
            </div>
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->