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
<h3>STUDENT LIST</h3>
<table>

<tr> <th> STUDENT ID </th> <th> NAME </th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM Student";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $name = $row['s_name'];
  $sid = $row['s_id'];
  
	echo "<tr>" . "<th>" . $sid . "</th>" . "<th>" . $name . "</th>" . "</tr>";
}

?>

</table><br><br><br>