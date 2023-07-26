<?php
require_once './db_connect';

$name = $_POST['name'];
$password = $_POST['password'];
$pass_hash = password_hash($password,PASSWORD_DEFAULT);

$email = $_POST['email'];
$priv = $_POST['priv'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$check = $connect -> query( "select * from users where email ='$email'");
$conter = $check -> num_rows;
if($conter == 0 ){
$connect->query("INSERT INTO users (name,email,phone,address,gender,password,priv) VALUES ('$name','$email','$Phone','$address','$gender','$pass_hash','$priv')");
header('location:../users.php');

}else{
    echo ' this emial found before';
}
