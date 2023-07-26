<?php

require "db_connect.php";

$id = $_GET['id'];

$connect -> query("DELETE FROM blog WHERE id = '$id'");

header("location:../blog.php");