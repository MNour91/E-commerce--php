<?php
$active= "massage";
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
         <li class="breadcrumb-item active">Massage</li>
        </ol>
    </div>

<?php
if(!isset($_GET['do'])){
    include './includes/massage_view.php';
}


?>

 </div>

<?php 
include "./design/footer.php";

?> 