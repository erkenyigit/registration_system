<?php


// Start the session
session_start();


include "config.php";

$sid=$_POST['sid']; //this is what we get from the form.
$password=$_POST['password'];

$res=mysqli_query($db,"SELECT* FROM Student WHERE s_id='$sid' ");


$db_result=mysqli_fetch_array($res);

if($db_result==NULL)
{
	echo "<script> alert('The student id does not exist');</script>";
	header("Refresh:0, url=studentlogin.php");
}
else{
	if($db_result['password']!=$password){
	
	echo "<script> alert('The password is incorrect');</script>";
	header("Refresh:0, url=studentlogin.php");
	
	
	}else{
		
		$_SESSION["studentid"] = $sid;
		header("Location: studentpage.php");
		echo "<script> alert('You are logged in');</script>";
	}
}
?>