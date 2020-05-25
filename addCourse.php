<?php
    session_start();
    include "config.php";
    //include "instructorcheck.php";
    $iid=$_SESSION["instructorid"];
    if(isset($_POST['cname'])){
        $cname = $_POST['cname'];
        $crn = $_POST['crn'];
        $capacity = $_POST['capacity'];
        $credit = $_POST['credit'];
        echo $cname . " " . $crn . " " . $capacity . " " . $credit . "<br>";
        
        $sql_statement = "INSERT INTO Courses(capacity,cname,c_id,su_credit) VALUES ('$capacity', '$cname', '$crn', '$credit') ";
        $sql_statement_2 = "INSERT INTO Teaches_r(i_id,c_id) VALUES ('$iid', '$crn') ";
        $result = mysqli_query($db,$sql_statement);
        $result_2 = mysqli_query($db,$sql_statement_2);
        if($result && $result_2){
            echo "<script> alert('COURSE ADDED SUCCESSFULLY!');</script>";
            header('Location: instructorpage.php');
           
        }
        else {
            echo "<script> alert('YOU ARE ALREADY GIVING THIS COURSE');</script>";
            header("Refresh:0, url=instructorpage.php");
        }
    }
    else{
        echo "not set";
    }
?>