<?php

require "db_connect.php";

$id = $_GET['id'];

$connect -> query("DELETE FROM users WHERE id = '$id'");

header("location:../users.php");