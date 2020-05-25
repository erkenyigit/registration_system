<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>

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
<h3>ALL COURSES</h3><br>
<table>

<tr> <th> CRN </th> <th> NAME </th> <th>CAPACITY</th> <th> CREDIT </th> <th> INSTRUCTOR ID </th> </tr> 

<?php

include "config.php";

$sql_statement = $sql_statement = "SELECT courses.c_id, teaches_r.i_id, courses.cname, courses.su_credit, courses.capacity FROM courses INNER JOIN teaches_r ON courses.c_id=teaches_r.c_id";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $name = $row['cname'];
  $crn = $row['c_id'];
  $capacity = $row['capacity'];
  $credit = $row['su_credit'];
  $instructorid = $row['i_id'];

	echo "<tr>" . "<th>" . $crn . "</th>" . "<th>" . $name . "</th>" . "<th>" . $capacity . "</th>" . "<th>" . $credit . "</th>" . "<th>" . $instructorid . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>