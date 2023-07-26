<?php
session_start();
require 'db_connect.php';
$id= $_SESSION['login'];
$connect -> query("UPDATE users SET status = 0 WHERE id = '$id'");

unset( $_SESSION['login']);
// session_destroy();
header("location:../login.php");