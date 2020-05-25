<?php
//session_start();
include "config.php";

//$sid=$_SESSION["studentid"];
$sid=$_POST['sid'];


$sql_statement = "DELETE FROM Student WHERE s_id='$sid' ";
$res = mysqli_query($db, $sql_statement);

if($res){
    $sql_statement_2 = "DELETE FROM Takes_r WHERE s_id='$sid' ";
    $res_2 = mysqli_query($db, $sql_statement_2);
    echo "<script> alert('Student deleted');</script>";
    header("Location: adminpanel.php");
}
else {
    echo "<script> alert('Error Occured');</script>";
    header("Refresh:0, url=adminpanel.php");
}
?>