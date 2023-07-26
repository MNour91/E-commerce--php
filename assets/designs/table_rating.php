
<div class="slide-sidebar-area" id="slide-sidebar-area" >
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top c    ontent -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
            <?php
            $select_rate  = $connect -> query("SELECT * FROM rating ORDER BY id DESC LIMIT 5");
             foreach($select_rate as  $recent_rating ){

            ?>
            <div class="single-review-item"><!-- single review item -->
                    <?php
                    $id_prod =  $recent_rating['id_product'];
                    $select_product_rated  = $connect -> query("SELECT * FROM products WHERE id = '$id_prod'");
                    $show_reted = $select_product_rated -> fetch_assoc();
                    ?>
                <div class="thumb">
                    <img src="./admin/product_img/<?php echo $show_reted['main_img'];?>" alt="recent review" height="80px" width="80px">
                </div >
                <div class="content" >
                    <h4 class="title" style="word-wrap: break-word ;width:180px"><?php echo $show_reted['name'];?></h4>
                    <ul>
                        <li>
                        <i class="fas fa-star" <?php if($recent_rating["rating"] >= 1 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i>
                        </li>
                        <li>
                        <i class="fas fa-star" <?php if($recent_rating["rating"] >= 2 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i>
                        </li>
                        <li>
                        <i class="fas fa-star" <?php if($recent_rating["rating"] >= 3 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i>
                        </li>
                        <li>
                        <i class="fas fa-star" <?php if($recent_rating["rating"] >= 4 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i>
                        </li>
                        <li>
                        <i class="fas fa-star" <?php if($recent_rating["rating"] == 5 ){echo "style= 'color:#ffb400; ' ";}else{echo "style= 'color:gray; '";} ?>></i>
                        </li>
                    </ul>
                   
                    <span class="posted-by">by  <?php
                     $id_customer =  $recent_rating['id_customer'];
                     $select_rate  = $connect -> query("SELECT * FROM customer WHERE id ='$id_customer'");
                     $name_customer = $select_rate -> fetch_assoc();
                        echo $name_customer["name"];

                     ?></span>
                </div>
            </div><!-- //. single review item -->
            <?php } ?>
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>