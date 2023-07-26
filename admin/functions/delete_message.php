<?php

require "db_connect.php";

$id = $_GET['id'];

$connect -> query("DELETE FROM massage WHERE id = '$id'");

header("location:../massage.php");