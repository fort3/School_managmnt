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
            	<h2 align="center"><?php echo "<p><strong>Welcome ".$staff_name."! </strong></p>" ?></h2><hr>
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
