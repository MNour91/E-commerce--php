<?php
require_once './db_connect.php';
if(!isset($_POST['submit'])){
   header('location:../products.php') ;
   exit();
}
$name = $_POST['name'];
$price = $_POST['price'];
$seller = $_POST['seller'];
$discount = $_POST['discount'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$main_img = $_FILES['main_image']['name'];
$extentions = array("jpg","png","gif","jpeg","jfif");
$type_product = $_POST['type_product'];

if($_FILES['main_image']['error']==0 and 
$_FILES['main_image']['size']<2000000 
){
    $ext = pathinfo($main_img ,PATHINFO_EXTENSION);
    if(in_array($ext,$extentions)){
        $newMain = md5(uniqid()).'.'.$ext;
        move_uploaded_file($_FILES['main_image']['tmp_name'],'../product_img/'.$newMain);
    }else{
        echo 'This extention File is wrong';
    }
}else{
    echo ' error in uploud or size ';
}

$arrimgs=[];
$j = count($_FILES['files']['name']) ;
for($i = 0 ;$i < $j ; $i++){  
    if($_FILES['files']['error'][$i] == 0){
    
        $imgs = $_FILES['files']["name"][$i];
        $img_ext = pathinfo($imgs,PATHINFO_EXTENSION);
    
        if(in_array($img_ext,$extentions ) && $_FILES['files']["size"][$i] < 1000000){  
         $newName = md5(uniqid()).".".$img_ext;        
         move_uploaded_file($_FILES['files']['tmp_name'][$i] , '../product_img/'.$newName);
         array_push($arrimgs,$newName);         
        }else{
            echo"error type images";
        }
        

    }else{
        echo"error upload images";
        
    }
}
$namesImg = implode("-",$arrimgs);

$ins = "INSERT INTO products (name,price,seller,discount,main_img,other_imgs,quantity,description,type_product) VALUES ('$name','$price','$seller','$discount','$newMain','$namesImg','$quantity','$description','$type_product')";
$connect ->query($ins);
header('location:../products.php');
