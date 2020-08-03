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
<title>Swaps University | Student</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
            	<h2 align="center"><?php echo "<p><strong>Welcome ".$student_name."! </strong></p>" ?></h2><hr>
            </div>
            <div id="c2">
            <p><h3><em><strong>Please see information below for your attention. </strong></em></h3></p><br>
			  </div>
            
        </div>
        
        <div id="footer" align="center">
        	<h3 align="center">Contacts</h3>
            <p>080swapsuni | @swapsuni | Swaps University</p>
            

        </div>
        
    </div>
</body>
</html>
