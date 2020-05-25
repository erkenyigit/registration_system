<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT</title>
</head>
<body>
<?php include "getCourse_student.php"; ?>

<hr>

<?php include "getCourse.php"; ?>
<br><hr><br>
<form action="registercourse.php" method ="POST">
<input type="text" name="crn" placeholder="Type course id(CRN)">

<button>
TAKE COURSE
</button>
</form><br><br>

<form action="dropcourse.php" method ="POST">
<input type="text" name="crn_d" placeholder="Type course id(CRN)">

<button>
DROP COURSE
</button>
</form>
</div>

</body>
</html>