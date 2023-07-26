<?php
require_once "./db_connect.php";
if(!isset($_POST['submit'])){
    header('location:../users.php');
    exit();
}
$name = $_POST['name'];
$email = $_POST['email'];

$password = $_POST['password'];
$pass_hash = password_hash($password,PASSWORD_DEFAULT);
$address = $_POST['address'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];
$Phone = $_POST['phone'];
$check = $connect -> query( "select * from users where email ='$email'");
$conter = $check -> num_rows;
if($conter == 0 ){
$connect->query("INSERT INTO users (name,email,phone,address,gender,password,priv) VALUES ('$name','$email','$Phone','$address','$gender','$pass_hash','$priv')");
header('location:../users.php');
}else{
    echo ' this emial found before';
}



