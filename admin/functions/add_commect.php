<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    require_once 'db_connect.php';

    $name = $_POST['name'];

    $id_post = $_POST['id_post'];

    $comment = $_POST['comment'];
    $time = date("Y/m/d");


    $con = $connect->query("INSERT INTO comments (id_post,name,commect,date) VALUES ('$id_post','$name','$comment', '$time')");

    if($con){
     $select = $connect->query("SELECT * FROM comments WHERE id_post = $id_post");
     echo $select->num_rows; 
    }
}