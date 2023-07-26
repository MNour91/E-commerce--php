<?php
session_start();
require "db_connect.php";

if(!isset($_POST['submit'])){
   header("location:../../login.php");
   exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$result_customer = $connect -> query("SELECT * FROM customer WHERE email = '$email'");

$row_customer = $result_customer -> fetch_assoc();

$id = $row_customer['id'];
$count = $result_customer -> num_rows;

$password_mysql = $row_customer['password'];


if(password_verify($password,$password_mysql)){

    if($count > 0){
        $_SESSION['customer_login'] = $id;
        header("location:../../index.php");
    }
    

}else{
    echo "email or password was Wrong";
    header("location:../../login.php");
}