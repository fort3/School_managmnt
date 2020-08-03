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
<title>Swaps University | Admin Navigation</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
            	<h2 align="center">Swaps University Admin Backend Navigation</h2>
            </div>
            <div id="c2">
                <?php echo "<p>Administrator ID: ".$admin_id."</p></br>"?>
        <?php echo "<p>Administrator Name: ".$admin_name."</p>"?>
            	<!--<p> Swaps University is a school of higher learning, your future is assured in Swaps University</p>-->

                
            </div>
            
        </div>
        
        <div id="footer" align="center">
        	<h3 align="center">Contacts</h3>
            <p>080swapsuni | @swapsuni | Swaps University</p>
            

        </div>
        
    </div>
</body>
</html>
