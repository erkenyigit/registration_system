<?php
// Start the session
session_start();

include "config.php";

$iid=$_POST['iid']; //this is what we get from the form.
$password=$_POST['password'];

$res=mysqli_query($db,"SELECT* FROM Instructor WHERE i_id='$iid' ");


$db_result=mysqli_fetch_array($res);

if($db_result==NULL)
{
	echo "<script> alert('The instructor id does not exist');</script>";
	header("Refresh:0, url=instructorlogin.php");
}
else{
	if($db_result['password']!=$password){
	
	echo "<script> alert('The password is incorrect');</script>";
	header("Refresh:0, url=instructorlogin.php");
	
	
	}else{
		
		$_SESSION["instructorid"] = $iid;
		header("Location: instructorpage.php");
		echo "<script> alert('You are logged in');</script>";
	}
}
?>