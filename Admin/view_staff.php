<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');
include('authenticate.php');

authenticate();

$admin_id = $_SESSION['administrator_id'];
$admin_name = $_SESSION['administrator_name'];

$query = mysqli_query($db,"SELECT * FROM staff") or die(mysqli_error($db));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swaps University | Staff Records</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
	#ta{
		background: #09f;
		border-right: 3px solid black;
		border-top: 2px solid black;
		border-bottom: 1px solid black;
		text-decoration: none;
		letter-spacing:1px;
		color:black;
		padding: 15px 25px;
		width: 107%;
		text-align: left;
	}
	#ta.ta1{
		color:black;
		padding: 15px 20px;
	}
	#ta2{
		border: 2px;
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
            	<h2 align="center">Staff Records Page</h2>
            </div>
            <div id="c2">
                <?php echo "<p>Administrator ID: ".$admin_id."</p></br>"?>
        <?php echo "<p>Administrator Name: ".$admin_name."</p>"?>
            	<!--<p> Swaps University is a school of higher learning, your future is assured in Swaps University</p>-->
<hr><br>
         <table id = "ta" border="0px">
            
          <tr id="ta2">
            <th class="ta1">Firstname</th>
            <th class="ta1">Lastname </th>
            <th class="ta1">Sex </th>
            <th class="ta1">Position </th>
            <th class="ta1">Salary</th>
            <th class="ta1">Faculty</th>
            <th class="ta1">Department</th>
            <th class="ta1">Age</th>
            <th class="ta1">Password</th>
            <th class="ta1">Course</th>
          </tr>
                    
          <tr>
            <?php
               while($row = mysqli_fetch_array($query)){
            ?>
            
            <td>
                <?php
                echo $row[1];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[2];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[3];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[4];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[5];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[6];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[7];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[8];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[9];
                ?>
            </td>
            
            <td>
                <?php
                echo $row[10];
                ?>
            </td>
            
          </tr>
          <?php } ?>
        </table>
            </div>
            
        </div>
        
        <div id="footer" align="center">
        	<h3 align="center">Contacts</h3>
            <p>080swapsuni | @swapsuni | Swaps University</p>
            

        </div>
        
    </div>
</body>
</html>
