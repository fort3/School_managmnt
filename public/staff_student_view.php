<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');
include('authenticate.php');
authenticate();

$staff_id = $_SESSION['staffID'];
$staff_name = $_SESSION['staffName'];

$query = mysqli_query($db,"SELECT * FROM result WHERE course_lecturer ='".$staff_name."'") or die(mysqli_error($db));
$query_view = mysqli_query($db,"SELECT firstname,lastname,middlename,matric_number FROM student") or die(mysqli_error($db));


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swaps University | Staff</title>
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
		padding: 10px 15px;
		width: 100%;
		text-align: left;
	}
	#ta.ta1{
		color:black;
		border:1px solid;
		padding: 5px 10px;
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
            <p><h3><em><strong>See Student Details Below. </strong></em></h3></p><br>
            <?php
                        $query1 = mysqli_fetch_array($query);
                        $query2 = mysqli_fetch_array($query_view);
                        
                       $query_view1 = $query1['matric_number'];
                       $query_view2 = $query2['matric_number'];
            ?>
            <table id="ta">
                <tr>
                    <th class="ta1">Student</th>
					<th class="ta1">Semester</th>
                    <th class="ta1">Course</th>
                    <th class= "ta1">Matric Number</th>
                    <th class="ta1">Score</th>
                    <th class="ta1">Grade</th>
                    <th class="ta1">GPA</th>
                </tr>
                <?php
                        if($query_view1 == $query_view2){
                            
                            $student_name = $query2['firstname'].' '.$query2['middlename'].' '.$query2['lastname'];
                            
                        while($row = mysqli_fetch_array($query)){
                            
                ?>
            <tr>
                
                <td>
                    <?php echo $student_name;?>
                </td>
				<td>
                    <?php echo $row['Semester']; ?>
                </td>
                <td>
                    <?php echo $row['course']; ?>
                </td>
                <td>
                    <?php echo $row['matric_number']; ?>
                </td>
                <td>
                    <?php echo $row['score']; ?>
                </td>
                <td>
                    <?php echo $row['grade']; ?>
                </td>
                <td>
                    <?php echo $row['gpa']; ?>
                </td>
                    <?php } ?>
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