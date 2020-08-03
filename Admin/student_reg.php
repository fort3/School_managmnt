<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');
include('authenticate.php');

authenticate();

$admin_id = $_SESSION['administrator_id'];
$admin_name = $_SESSION['administrator_name'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swaps University | Student Registration</title>
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
		<a href="admin_nav.php">General Navigation Page</a>
        <a href="staff_reg.php">Staff registration</a>
        <a href="student_reg.php">Student registration</a>
        <a href="view_staff.php">View Staff</a>
        <a href="view_student.php">View Student</a>
        <a href="admin_logout.php">Logout</a>
        </div>
        
       <!-- <div id="side">
        	<div id="side1">

           </div>
        </div>-->
        
        <div id="content" align="center">
        
        	<div id="c1">
            	<h2 align="center">Student Registration Page</h2>
            </div>
            <div id="c2">
                <?php echo "<p>Administrator ID: ".$admin_id."</p></br>"?>
        <?php echo "<p>Administrator Name: ".$admin_name."</p>"?>
            	<!--<p> Swaps University is a school of higher learning, your future is assured in Swaps University</p>-->
				
				<hr><br>
				
				<?php
				
				if(isset($_POST['add'])){
					
					$error = array();
					
					if(empty($_POST['matric_number'])){
						
						$error[] = "Please enter Matric Number"; 
					}else{
						
						$matric_number = mysqli_real_escape_string($db,$_POST['matric_number']);
						
					}
					if(empty($_POST['firstname'])){
						
						$error[] = "Please enter First Name";
						
					}else{
						
						$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
						
					}
					if(empty($_POST['lastname'])){
						
						$error[] = "Please enter Last Name";
						
					}else{
						
						$lastname = mysqli_real_escape_string($db,$_POST['lastname']);
						
					}
					if(empty($_POST['middlename'])){
						
						$error[] = "Please enter Middle Name";
						
					}else{
						
						$middlename = mysqli_real_escape_string($db,$_POST['middlename']);
						
					}
					if(empty($_POST['age'])){
						
						$error[] = "Please enter age";
						
					}else{
						
						$age = mysqli_real_escape_string($db,$_POST['age']);
						
					}
					if(empty($_POST['sex'])){
						
						$error[] = "Please choose gender";
						
					}else{
						
						$sex = mysqli_real_escape_string($db,$_POST['sex']);
						
					}
					if(empty($_POST['faculty'])){
						
						$error[] = "Please select faculty";
						
					}else{
						
						$faculty = mysqli_real_escape_string($db,$_POST['faculty']);
						
					}
					if(empty($_POST['department'])){
						
						$error[] = "Please enter department";
						
					}else{
						
						$department = mysqli_real_escape_string($db,$_POST['department']);
						
					}
					if(empty($_POST['department'])){
						
						$error[] = "Please enter department";
						
					}else{
						
						$department = mysqli_real_escape_string($db,$_POST['department']);
						
					}
					if(empty($_POST['course'])){
						
						$error[] = "Please enter course";
						
					}else{
						
						$course = mysqli_real_escape_string($db, $_POST['course']);
						
					}
					if(empty($_POST['level'])){
						
						$error[] = "Enter level";
						
					}else{
						
						$level = mysqli_real_escape_string($db, $_POST['level']);
						
					}
					if(empty($_POST['gpa'])){
						
						$error[] = "Please enter GPA";
						
					}else{
						
						$gpa = mysqli_real_escape_string($db,$_POST['gpa']);
						
					}
					if(empty($_POST['password'])){
						
						$error[] = "Please enter password";
						
					}else{
						
						$password = mysqli_real_escape_string($db, $_POST['password']);
						
					}
					if(empty($_POST['password'])){
						
						$error[] = "Please enter password";
						
					}else{
						
						$pword = md5(mysqli_real_escape_string($db, $_POST['password']));
						
					}
					
					if(empty($error)){
						$query = mysqli_query($db,"INSERT into student VALUES(NULL,'".$matric_number."','".$firstname."','".$lastname."','".$middlename."','".$age."','".$sex."',
											  '".$faculty."','".$department."','".$course."','".$level."','".$gpa."','".$password."','".$pword."')") or die(mysqli_error($db));
					}else{
						
						$err_msg = "Please Insert the correct values";
						
						header("location:student_reg.php?err_msg=$err_msg");
						
					}
					
					
				}
				
				?>
        <form id="fade" action="" method="post">
			<fieldset  id="field"><br>
            <p>Matric Number: <input type="number" name= "matric_number"/></p><br>
            <p>Firstname: <input type="text" name = "firstname"/></p><br>
			<p>Lastname: <input type="text" name = "lastname"/></p><br>
			<p>Middlename: <input type="text" name = "middlename"/></p><br>
			<p>Age: <input type="number" name="age"/></p><br>
            <p>Sex: Male<input type="radio" name="sex" value="M"/>
                    Female<input type= "radio" name="sex" value="F"/></p><br>
			<p>Faculty: <select name="faculty">
							<option>Swaps Business School</option>
							<option>School of Computing and Engineering</option>
							<option>School of Education and Humanities</option>
							<option>Swaps School of Medicine</option>
						</select></p><br>
			<p>Department: <input type="text" name="department"/></p><br>
			<p>Course: <input type="text" name="course"/></p><br>
			<p>Level: <input type="text" name="level"/></p><br>
			<p>GPA: <input type="text" name="gpa"/></p><br>
			<p>Password: <input type="password" name="password"/></p><br>
            <input type="submit" name="add" value="Click to Add to Database"/><br>
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
