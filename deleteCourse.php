<?php
    session_start();
    include "config.php";
    //include "instructorcheck.php";
    $iid=$_SESSION["instructorid"];
    if(isset($_POST['crn'])){
        
        $crn = $_POST['crn'];
        
        $sql_statement = "DELETE FROM Teaches_r WHERE c_id='$crn' AND i_id = '$iid'; ";
        $sql_statement_2 = "DELETE FROM Courses WHERE c_id='$crn'; ";
        $result = mysqli_query($db,$sql_statement);
        $result_2 = mysqli_query($db,$sql_statement_2);
        if(isset($result) && isset($result_2)){
            echo "<script> alert('COURSE DELETED SUCCESSFULLY!');</script>";
            header('Location: instructorpage.php');
           
        }
        else {
            echo "<script> alert('ERROR');</script>";
        }
    }
    else{
        echo "not set";
    }
?>