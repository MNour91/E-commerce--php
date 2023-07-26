<?php

require "db_connect.php";
session_start();
if(!isset($_SESSION['customer_login'])){
    header("location:../../login.php");
    exit();
}
$id = $_POST['id_order'];
$id_customer=$_SESSION['customer_login'];

$delete= $connect -> query("DELETE FROM orders WHERE id = '$id'");
if ($delete){
    $count_it = $connect ->query("select * from orders where customer_id ='$id_customer'");
    echo $count = $count_it ->num_rows;
}
