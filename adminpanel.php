<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
</head>
<body>
    <div align="center">
    
    <?php include "getStudent.php"; ?>
    
    <div>
    
    <form action="addStudent.php" method="POST">
            <b>ADD STUDENT</b><br>
            <input type="text" name="sname" placeholder="Type the student name" ><br>
            <input type="text" name="sid" placeholder="Type student id" ><br>
            <input type="text" name="password" placeholder="Type student password" ><br>
            <input type="text" name="credit" placeholder="Type credit of student" ><br>
            
            <button>ADD</button>
    </form>
    <br>
    <form action="deleteStudent.php" method="POST">
            <b>DELETE STUDENT</b><br>
            <input type="text" name="sid" placeholder="Delete student with given ID" ><br>
            
            <button>DELETE</button>
    </form> 
    </div><br><br><br>
    <hr>
    
    <?php include "getInstructor.php";?>
    <div>
    
    <form action="addInstructor.php" method="POST">
            <b>ADD INSTRUCTOR</b><br>
            <input type="text" name="iname" placeholder="Type the instructor name" ><br>
            <input type="text" name="iid" placeholder="Type the instructor id " ><br>
            <input type="text" name="password" placeholder="Type instructor password" ><br>
            <input type="text" name="salary" placeholder="Type the salary of instructor" ><br>

            <button>ADD</button>
    </form>
    <br>
    <form action="deleteInstructor.php" method="POST">
            <b>DELETE INSTRUCTOR</b><br>
            <input type="text" name="iid" placeholder="Delete instructor with given ID" ><br>
            
            <button>DELETE</button>
    </form> 
    </div>
    
   
    
    
    
    
    </div>
</body>
</html>