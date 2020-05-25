<?php
    //session_start();
    include "config.php";
    //include "instructorcheck.php";
    //$iid=$_SESSION["instructorid"];
    if(isset($_POST['sname'])){
        $sname = $_POST['sname'];
        $sid = $_POST['sid'];
        $credit = $_POST['credit'];
        $password = $_POST['password'];
        
        $res=mysqli_query($db,"SELECT* FROM Student WHERE s_id='$sid' ");


        $db_result=mysqli_fetch_array($res);

        if($db_result==NULL)
        {
            $sql_statement = "INSERT INTO Student(credit_available,password ,s_id,s_name) VALUES ('$credit', '$password', '$sid', '$sname') ";
            $result = mysqli_query($db,$sql_statement);
            if($result){
                echo "<script> alert('The student added successfully');</script>";
	            header('Location: adminpanel.php');
            }    
	        else{
                echo "<script> alert('An error occured');</script>";
	            header("Refresh:0, url=adminpanel.php");
            }
        }
        else{
	        echo "<script> alert('The student already exist');</script>";
	        header("Refresh:0, url=adminpanel.php");
        }
        
        
        //$sql_statement_2 = "INSERT INTO Teaches_r(i_id,c_id) VALUES ('$iid', '$crn') ";
        //$result = mysqli_query($db,$sql_statement);
        //$result_2 = mysqli_query($db,$sql_statement_2);
    }
    else{
        echo "not set";
    }
?>