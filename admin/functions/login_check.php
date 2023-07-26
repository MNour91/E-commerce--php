<?php
session_start();
require "db_connect.php";

if(!isset($_POST['submit'])){
   header("location:../login.php");
   exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

$result_user = $connect -> query("SELECT * FROM users WHERE email = '$email'");

$row_user = $result_user -> fetch_assoc();

$id = $row_user['id'];
$prive = $row_user['priv'];
$count = $result_user -> num_rows;

$password_mysql = $row_user['password'];


if(password_verify($password,$password_mysql)){

    if($count > 0){
        $_SESSION['login'] = $id;
        $_SESSION['priv']  =$prive;
        $connect -> query("UPDATE users SET status = 1 WHERE id = '$id'");
        header("location:../index.php");
    }
    

}else{
    echo "email or password was Wrong";
}