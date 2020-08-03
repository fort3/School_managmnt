<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');
include('authentication.php');

authenticate();

$matric_number = $_SESSION['matricNumber'];
$student_name = $_SESSION['studentName'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swaps University | Staff</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
	#fade{
		border: 1px solid black;
		border-right:2px solid black;
		border-bottom: 3px solid black;
		background-color: #fff;
		text-decoration:none;
		letter-spacing: 2px;
		text-align: left;
		padding: 10px 15px;
		width: 100%;
		color: black;
	}
	#field{
		background: #09f;
	}
</style>
</head>

<body>

	<div id="container">
    	<div id="header"><h1 align="center">Swaps University Information Management System</h1></div>
        <div id="nav">
		<a href="student_page.php">Student Information Page</a>
        <a href="student_add_course.php">Student Course Registration</a>
		<a href="student_view_course.php">View Courses</a>
        <a href="student_view_results.php">View Results</a>
        <a href="student_logout.php">Logout</a>
        </div>
        
       <!-- <div id="side">
        	<div id="side1">

           </div>
        </div>-->
        <div id="content" align="center">
        
        	<div id="c1">
            	<h2 align="center"><?php echo "<p><strong>Hello ".$student_name."! </strong></p>" ?></h2><hr>
            </div>
            <div id="c2">
            <p><h3><em><strong>Register Your Course Below. </strong></em></h3></p><br>
            
            <?php
            
                if(array_key_exists('send',$_POST)){
                    
                    $error = array();
                    
                 if(empty($_POST['matric_number']) || empty($_POST['course_name']) || empty($_POST['course_lecturer']) || empty($_POST['faculty']) || empty($_POST['department']) || empty($_POST['semester']) || empty($_POST['level']) || empty($_POST['credit_units'])){
                    
                    $error[] = "Please Enter the correct details";
                    
                 }else{
                    
					$matric_number = mysqli_real_escape_string($db,$_POST['matric_number']);
                    $course_name = mysqli_real_escape_string($db,$_POST['course_name']);
                    $course_lecturer = mysqli_real_escape_string($db,$_POST['course_lecturer']);
                    $faculty = mysqli_real_escape_string($db,$_POST['faculty']);
                    $department = mysqli_real_escape_string($db,$_POST['department']);
                    $semester = mysqli_real_escape_string($db,$_POST['semester']);
                    $level = mysqli_real_escape_string($db,$_POST['level']);
                    $credit_units = mysqli_real_escape_string($db,$_POST['credit_units']);
                    
                 }
                 if(empty($error)){
                    
                    $query = mysqli_query($db,"INSERT INTO course VALUES(NULL,'".$matric_number."','".$course_name."','".$course_lecturer."','".$faculty."','".$department."','".$semester."','".$level."','".$credit_units."')") or die(mysqli_error($db));
                    
						}else{
							
							$err_msg = "Please insert the correct values";
							header("location:staff_result_add.php?err_msg=$err_msg");
							
						}

					
				}
                
            
            ?>
            
         <form id="fade" action="" method="post">
			
            <fieldset id="field"><br>
			<p>Matric Number: <input type="number" name= "matric_number"/></p><br>
            <p>Course: <input type="text" name= "course_name"/></p><br>
			<p>Course Lecturer: <input type="text" name="course_lecturer"/></p><br>
            <p>Faculty: <input type="text" name="faculty"/></p><br>
            <p>Department: <input type="text" name="department"/></p><br>
            <p>Semester: <input type="text" name="semester"/></p><br>
            <p>Level: <input type="number" name="level"/></p><br>
            <p>Unit: <input type="number" name="credit_units"/></p><br>
            <input type="submit" name="send" value="Submit"/><br>
            </fieldset>
			
         </form>
			  </div>
            
        </div>
        
        <div id="footer" align="center">
        	<h3 align="center">Contacts</h3>
            <p>080swapsuni | @swapsuni | Swaps University</p>
            

        </div>
        
    </div>
</body>
</html>