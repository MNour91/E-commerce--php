<?php

require "db_connect.php";

$id = $_POST['_id'];

$update_message = "UPDATE massage SET readed = 1 WHERE id = '$id '";


if($connect -> query($update_message)){

    $mess_read = "SELECT * FROM massage WHERE _read = 0";
    
     $result_ms = $connect -> query($mess_read);

     echo $result_ms -> num_rows;

}


