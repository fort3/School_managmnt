<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');
include('authentication.php');

authenticate();

$matric_number = $_SESSION['matricNumber'];
$student_name = $_SESSION['studentName'];

$query = mysqli_query($db,"SELECT matric_number,course_name,course_lecturer,faculty,department,semester,level,credit_units FROM course WHERE matric_number ='".$matric_number."'") or die(mysqli_error($db));
$query_view = mysqli_query($db,"SELECT matric_number FROM student") or die(mysqli_error($db));


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Swaps University | Student</title>
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
            <p><h3><em><strong>See Your Registered Courses Below. </strong></em></h3></p><br>
			
			<?php
                        $query1 = mysqli_fetch_array($query);
                        $query2 = mysqli_fetch_array($query_view);
                        
                      $query_view1 = $query1['matric_number'];
                       $query_view2 = $query2['matric_number'];
            ?>
            <table id = "ta">
                <tr>
					<th class="ta1">Matric Number</th>
                    <th class="ta1">Course</th>
                    <th class="ta1">Lecturer</th>
                    <th class="ta1">Faculty</th>
                    <th class="ta1">Department</th>
                    <th class="ta1">Semester</th>
					<th class="ta1">Level</th>
					<th class="ta1">Unit</th>
                </tr>
                <?php
                        if($query_view1 == $query_view2){
							
                        while($row = mysqli_fetch_array($query)){
                            
                ?>
            <tr>
                
               <td>
                    <?php echo $row['matric_number']; ?>
                </td>
				<td>
                    <?php echo $row['course_name']; ?>
                </td>
                <td>
                    <?php echo $row['course_lecturer']; ?>
                </td>
                <td>
                    <?php echo $row['faculty']; ?>
                </td>
                <td>
                    <?php echo $row['department']; ?>
                </td>
                <td>
                    <?php echo $row['semester']; ?>
                </td>
                <td>
                    <?php echo $row['level']; ?>
                </td>
				<td>
                    <?php echo $row['credit_units']; ?>
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
