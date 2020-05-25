<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTRUCTOR</title>
</head>
<body>
    <div align="center">
   
    <?php include "getCourse_instructor.php"; ?>
    <br>
    <hr>
    <br>

    <?php include "getCourse.php"; ?>
    <br>
    <br>
    <hr>
    <br>
    <form action="addCourse.php" method="POST">
            <b>ADD COURSE</b><br>
            <input type="text" name="cname" placeholder="Type the course name" ><br>
            <input type="text" name="crn" placeholder="Type course id (CRN) " ><br>
            <input type="text" name="capacity" placeholder="Type the capacity of the course" ><br>
            <input type="text" name="credit" placeholder="Type the credit of the course" ><br>
            <button>ADD</button>
    </form>
    <br>
    
    <br>
    <form action="deleteCourse.php" method="POST">
            <b>DELETE COURSE</b><br>
            <input type="text" name="crn" placeholder="Delete course with given ID" ><br>
            
            <button>DELETE</button>
    </form> 
    </div>
</body>
</html>