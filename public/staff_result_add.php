<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');
include('authenticate.php');
authenticate();

$staff_id = $_SESSION['staffID'];
$staff_name = $_SESSION['staffName'];

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
		<a href="staff_page.php">Staff Information Page</a>
        <a href="staff_result_add.php">Student Result Upload</a>
		<a href="staff_view_reg_students.php">View Registered Students</a>
        <a href="staff_student_view.php">View Results</a>
        <a href="staff_logout.php">Logout</a>
        </div>
        
       <!-- <div id="side">
        	<div id="side1">

           </div>
        </div>-->
        <div id="content" align="center">
        
        	<div id="c1">
            	<h2 align="center"><?php echo "<p><strong>Hello ".$staff_name."! </strong></p>" ?></h2><hr>
            </div>
            <div id="c2">
            <p><h3><em><strong>Enter in student result below in their correct fields as labeled. </strong></em></h3></p><br>
            
            <?php
            
                if(array_key_exists('send',$_POST)){
                    
                    $error = array();
                    
                 if(empty($_POST['Semester']) || empty($_POST['course']) || empty($_POST['matric_number']) || empty($_POST['score']) || empty($_POST['grade']) || empty($_POST['gpa'])){
                    
                    $error[] = "Please Enter the correct details";
                    
                 }else{
                    
					$Semester = mysqli_real_escape_string($db,$_POST['Semester']);
                    $course = mysqli_real_escape_string($db,$_POST['course']);
                    $matric_number = mysqli_real_escape_string($db,$_POST['matric_number']);
                    $score = mysqli_real_escape_string($db,$_POST['score']);
                    $grade = mysqli_real_escape_string($db,$_POST['grade']);
                    $gpa = mysqli_real_escape_string($db,$_POST['gpa']);
                    
                 }
                 if(empty($error)){
                    
                    $query = mysqli_query($db,"INSERT INTO result VALUES(NULL,'".$Semester."','".$course."','".$staff_name."','".$matric_number."','".$score."','".$grade."','".$gpa."')") or die(mysqli_error($db));
                    
						}else{
							
							$err_msg = "Please insert the correct values";
							header("location:staff_result_add.php?err_msg=$err_msg");
							
						}

					
				}
                
            
            ?>
            
         <form id="fade" action="" method="post">
			
            <fieldset id="field"><br>
			<p>Semester: <input type="text" name= "Semester"/></p><br>
            <p>Course: <input type="text" name= "course"/></p><br>
			<p>Matric Number: <input type="number" name="matric_number"/></p><br>
            <p>Score: <input type="number" name="score"/></p><br>
            <p>Grade: <input type="text" name="grade"/></p><br>
            <p>GPA: <input type="number" name="gpa"/></p><br>
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