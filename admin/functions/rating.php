<?php
require "./db_connect.php";
session_start();
if(!isset($_SESSION['customer_login'])){
    header("location:../../login.php");
    exit();
}
$id_customer = $_SESSION['customer_login'];
$id_pro = $_POST["_id"];
$rating = $_POST["rating"];
$rating ++;
$check = $connect ->query("SELECT * FROM rating WHERE id_customer = '$id_customer' and id_product = '$id_pro '");
$count = $check ->num_rows;
if($count == 0){
    $insert_rating = $connect ->query("INSERT INTO rating (id_customer,id_product,rating) VALUES('$id_customer','$id_pro','$rating')");
    if($insert_rating ){
        echo " thanks ";
    }
}else{
    echo "u are raring before";
    exit();
} 

