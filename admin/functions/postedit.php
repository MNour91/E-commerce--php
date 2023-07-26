<?php

require "db_connect.php";

if(!isset($_POST['submit'])){
    header("location:../blog.php");
    exit();
}


$id = $_POST['id'];
$name = $_POST['name'];
$post = $_POST['post'];
$subject = $_POST['Subject'];

$connect -> query("UPDATE blog SET name = '$name',subject =  '$subject', post ='$post' WHERE id = '$id' ");
header('location:../blog.php');