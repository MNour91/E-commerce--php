<?php

require "db_connect.php";

$id = $_GET['id'];

$agree_order = "UPDATE orders SET agreement = 1 WHERE id = '$id '";
$connect -> query($agree_order);
header("location:../order.php");