<?php
$active = 'products';
include './design/header.php';
include './design/sidebar.php';
?>
<div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div>
        <?php
         include_once './design/options.php';

        if(!isset($_GET['do']) or $_GET['do'] =='all'){
            include './includes/products_view.php';
        }
        elseif($_GET['do'] =='add'){
            include './includes/add_product.php';
        }
        elseif($_GET['do'] =='edit'){
            include './includes/edit_product.php';
        }
        elseif($_GET['do'] =='mobile'){
          include './includes/mobile_product.php';
        }
        elseif($_GET['do'] =='elect'){
        include './includes/electronic_product.php';
        }
        elseif($_GET['do'] =='fashion'){
          include './includes/fashion_products.php';
        }
        elseif($_GET['do'] =='com'){
        include './includes/computer_product.php';
        }
        elseif($_GET['do'] =='toys'){
          include './includes/toy_product.php';
        }
        elseif($_GET['do'] =='book'){
          include './includes/book_product.php';
        }
        elseif($_GET['do'] =='home'){
        include './includes/home_product.php';
        }

        ?>


 </div>


<?php
include './design/footer.php ';
?>
