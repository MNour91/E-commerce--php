<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    require_once 'db_connect.php';

    $first_name = $_POST['_first_name'];

    $last_name = $_POST['_last_name'];

    $email = $_POST['_email'];

    $subject = $_POST['_subject'];

    $message = $_POST['_message'];

    $con = $connect->query("INSERT INTO massage (first_name,last_name,email,subject,message,readed) VALUES ('$first_name','$last_name','$email','$subject','$message',0)");

    if($con){
        echo "<div class='alert alert-success'>Message Sent</div>";
    }
}