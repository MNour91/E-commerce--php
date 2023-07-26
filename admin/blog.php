<?php
$active= "blog";
include './design/header.php';
include './design/sidebar.php';

?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
        <?php
        if(!isset($_GET['do'])){
            include './includes/view_post.php';
        }
        elseif($_GET['do'] =='add'){
            include './includes/add_post.php';
        }
        elseif($_GET['do'] =='edit'){
            include './includes/edit_post.php';
        }

        ?>
            





        </div>
      <!-- /.container-fluid -->

      <?php 
    include "./design/footer.php";

    ?>