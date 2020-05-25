<?php
session_start();
include "config.php";
//include "studentcheck.php";
$sid=$_SESSION["studentid"];
$crn=$_POST['crn'];

$check = "SELECT * FROM Courses WHERE c_id = '$crn'";
$res_check = mysqli_query($db,$check);
$final_check = mysqli_fetch_array($res_check);

if($final_check['capacity'] > 0){
    $sql_statement = "INSERT INTO Takes_r(s_id,c_id) VALUES ('$sid', '$crn') ";
    $res = mysqli_query($db, $sql_statement);
    
    if($res){
        $sql_statement_2 = "UPDATE Courses SET capacity = capacity - 1 WHERE c_id = '$crn' ";
        $res_2 = mysqli_query($db, $sql_statement_2);
        echo "<script> alert('COURSE REGISTERED SUCCESSFULLY!');</script>";
        header("Location: studentpage.php");
    }
    else {
        echo "<script> alert('YOU ALREADY HAVE THAT COURSE or THERE IS NO SUCH AVAILABLE COURSE');</script>";
        header("Refresh:0, url=studentpage.php");
    }
}
else{
    echo "<script> alert('NO AVAILABLE CAPACITY or SUCH AVAILABLE COURSE');</script>";
    header("Refresh:0, url=studentpage.php");
}

?>