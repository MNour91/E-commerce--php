<?php

require "db_connect.php";

if(!isset($_POST['submit'])){
    header("location:../users.php");
    exit();
}


$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$password_hash = password_hash($password,PASSWORD_DEFAULT);

$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$priv = $_POST['priv'];
$check = $connect -> query( "select * from users where email ='$email'");
$conter = $check -> num_rows;
if($conter == 0 ){

 $connect -> query("UPDATE users SET name='$name',email='$email',address='$address',gender='$gender',phone='$phone',password='$password_hash',priv='$priv' WHERE id = '$id' ");

 header("location:../users.php");
}else{
    echo ' this emial found before';
}