<?php
//session_start();
include "config.php";

//$sid=$_SESSION["studentid"];
$iid=$_POST['iid'];


$sql_statement = "DELETE FROM Instructor WHERE i_id='$iid' ";
$res = mysqli_query($db, $sql_statement);

if($res){
    $sql_statement_2 = "DELETE FROM Teaches_r WHERE i_id='$iid' ";
    $res_2 = mysqli_query($db, $sql_statement_2);
    echo "<script> alert('Instructor deleted');</script>";
    header("Location: adminpanel.php");
}
else {
    echo "<script> alert('Error Occured');</script>";
    header("Refresh:0, url=adminpanel.php");
}
?>