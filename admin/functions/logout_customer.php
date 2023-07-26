<?php
session_start();
unset($_SESSION['customer_login']);
// destroy($_SESSION['customer_login']);
header("location:../../index.php");