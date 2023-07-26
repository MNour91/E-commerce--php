<?php
require "db_connect.php";

$id = $_GET['id'];

$sel_img = $connect ->query("SELECT * FROM products WHERE id = '$id'");
$name_img = $sel_img -> fetch_assoc();
$m_img = $name_img['main_img'];
$o_imgs = explode('-',$name_img['other_imgs']);
$delete_img= unlink("../product_img/".$m_img);
for($i = 0;$i < count($o_imgs); $i++ ){
     $delete_imgs= unlink("../product_img/".$o_imgs[$i]);

}
  if($delete_img && $delete_imgs){
    $connect -> query("DELETE FROM products WHERE id = '$id'");
    header("location:../products.php");
 }elseif($delete_img or $delete_imgs){
     
    $connect -> query("DELETE FROM products WHERE id = '$id'");
    header("location:../products.php");
 }else{

    $connect -> query("DELETE FROM products WHERE id = '$id'");
    header("location:../products.php");
 
 }

