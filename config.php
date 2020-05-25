<?php
    $db = mysqli_connect('localhost','root','','hw_database');
    if($db->connect_errno > 0){
        die('unable to connect database [' . $db->connect_error . ']');
    }
?>