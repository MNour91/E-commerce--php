<?php
require_once './db_connect.php';

$name = $_POST['name'];
$password = $_POST['password'];
$pass_hash = password_hash($password,PASSWORD_DEFAULT);
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$check = $connect -> query( "select * from customer where email ='$email'");
$conter = $check -> num_rows;
if($conter == 0 ){
$connect->query("INSERT INTO customer (name,email,phone,address,password) VALUES ('$name','$email','$phone','$address','$pass_hash')");
header('location:../../index.php');

}else{
    echo ' this emial found before';
    header('location:../../index.php');
}