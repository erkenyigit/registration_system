<!DOCTYPE html>
<html>
<head>
	<title>STUDENT</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">
<h3>MY COURSES</h3><br>
<table>

<tr> <th> CRN </th> <th> NAME </th> <th> CREDIT </th> </tr> 

<?php

include "config.php";
$sid=$_SESSION["studentid"];
$sql_statement = "SELECT * FROM courses WHERE c_id IN (SELECT c_id FROM takes_r WHERE s_id = '$sid')";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $name = $row['cname'];
  $crn = $row['c_id'];
  //$capacity = $row['capacity'];
  $credit = $row['su_credit'];

	echo "<tr>" . "<th>" . $crn . "</th>" . "<th>" . $name . "</th>" . "<th>" . $credit . "</th>" . "</tr>";
}

?>

</table><br><br><br>