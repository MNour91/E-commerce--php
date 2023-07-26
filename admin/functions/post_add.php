<?php
require_once './db_connect.php';
if(!isset($_POST['submit'])){
   header('location:../products.php') ;
   exit();
}
$name = $_POST['name'];
$Subject = $_POST['Subject'];
$time = date("Y/m/d");
$img = $_FILES['img']['name'];
$extentions = array("jpg","png","gif","jpeg","jfif");
if($_FILES['img']['error']==0 and 
$_FILES['img']['size']<2000000 
){
    $ext = pathinfo($img ,PATHINFO_EXTENSION);
    if(in_array($ext,$extentions)){
        $newImg = md5(uniqid()).'.'.$ext;
        move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$newImg);
    }else{
        echo 'This extention File is wrong';
    }
}else{
    echo ' error in uploud or size ';
}
$post = $_POST['post'];
$keywords = $_POST['keywords'];

$ins = "INSERT INTO blog (name,subject,date,post,img,keywords) VALUES ('$name','$Subject','$time','$post' ,'$newImg','$keywords')";
$connect -> query($ins);
header("location:../blog.php");