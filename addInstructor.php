<?php
    //session_start();
    include "config.php";
    //include "instructorcheck.php";
    //$iid=$_SESSION["instructorid"];
    if(isset($_POST['iname'])){
        $iname = $_POST['iname'];
        $iid = $_POST['iid'];
        $salary = $_POST['salary'];
        $password = $_POST['password'];
        
        $res=mysqli_query($db,"SELECT* FROM Instructor WHERE i_id='$iid' ");


        $db_result=mysqli_fetch_array($res);

        if($db_result==NULL)
        {
            $sql_statement = "INSERT INTO Instructor(i_id,i_name,password ,salary) VALUES ('$iid', '$iname', '$password', '$salary') ";
            $result = mysqli_query($db,$sql_statement);
            if($result){
                echo "<script> alert('The instructor added successfully');</script>";
	            header('Location: adminpanel.php');
            }    
	        else{
                echo "<script> alert('An error occured');</script>";
	            header("Refresh:0, url=adminpanel.php");
            }
        }
        else{
	        echo "<script> alert('The instructor already exist');</script>";
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