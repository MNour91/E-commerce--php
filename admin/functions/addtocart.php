<?php
require "./db_connect.php";
session_start();
if(!isset($_SESSION['customer_login'])){
    header("location:../../login.php");
    exit();
}
$time = date("Y/m/d");
$id_customer = $_SESSION['customer_login'];
$id_pro = $_POST["idp"];
$quantity = $_POST["quant"];

$check = $connect ->query("SELECT * FROM orders WHERE customer_id = '$id_customer' and product_id= '$id_pro'");
$count = $check ->num_rows;
if($count >0){
    $order = $connect ->query("UPDATE orders SET quantity = quantity +'$quantity' , time_order = '$time' WHERE customer_id = '$id_customer' and product_id= '$id_pro'");
}else{
    $order = $connect ->query("INSERT INTO orders (customer_id,product_id,quantity,time_order,agreement) VALUES('$id_customer','$id_pro','$quantity','$time',0)");
}

if($order){

    
    $count_it = $connect ->query("select * from orders where customer_id ='$id_customer'");
    echo $count = $count_it ->num_rows;
}