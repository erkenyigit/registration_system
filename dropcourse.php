<?php
session_start();
include "config.php";

$sid=$_SESSION["studentid"];
$crn=$_POST['crn_d'];


$sql_statement = "DELETE FROM Takes_r WHERE s_id='$sid' AND c_id='$crn'; ";
$res = mysqli_query($db, $sql_statement);

if($res){
    $sql_statement_2 = "UPDATE Courses SET capacity = capacity + 1 WHERE c_id = '$crn' ";
    $res_2 = mysqli_query($db, $sql_statement_2);
    echo "<script> alert('COURSE DROPPED SUCCESSFULLY!');</script>";
    header("Location: studentpage.php");
}
else {
    echo "<script> alert('YOU DO NOT HAVE SUCH COURSE');</script>";
    header("Refresh:0, url=studentpage.php");
}
?>