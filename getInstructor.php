<!DOCTYPE html>
<html>
<head>
	<title>INSTRUCTOR</title>

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
<h3>INSTRUCTOR LIST</h3>
<table>

<tr> <th> INSTRUCTOR ID </th> <th> NAME </th> <th> SALARY </th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM Instructor";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $name = $row['i_name'];
  $iid = $row['i_id'];
  $salary = $row['salary'];
	echo "<tr>" . "<th>" . $iid . "</th>" . "<th>" . $name . "</th>" . "<th>" . $salary . "</th>" . "</tr>";
}

?>

</table><br><br><br>