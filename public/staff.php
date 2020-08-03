<?php
session_start();
include('../db_con.php');

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
		text-align: center;
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
    	<div id="header"><h1 align="center">Swaps University</h1></div>
        <div id="nav">
		<a href="Home.php">Home</a>
        <a href="staff.php">Staff</a>
        <a href="student.php">Student</a>
        <a href="about.php">About</a>
        </div>
        
       <!-- <div id="side">
        	<div id="side1">

           </div>
        </div>-->
        
        <div id="content" align="center">
        
        	<div id="c1">
            	<h2 align="center">Staff Login </h2><hr>
            </div>
            <div id="c2">
            <p><h3><em><strong>Please Login below</strong></em></h3></p><br>
			
			<?php
			
			if(isset($_POST['login'])){
				
				$error = array();
				
				if(empty($_POST['staff_id'])){
					
					$error[] = "Please enter your Staff ID";
					
				}else{
					
					$staff_id = mysqli_real_escape_string($db,$_POST['staff_id']);
					
				}
				if(empty($_POST['password'])){
					
					$error[] = "Please enter your Password";
					
				}else{
					
					$password = mysqli_real_escape_string($db,$_POST['password']);
					
				}
				if(empty($error)){
					
					$query = mysqli_query($db,"SELECT * FROM staff WHERE staff_id = '".$staff_id."' AND password = '".$password."'") or die(mysqli_error($db));
					
					if(mysqli_num_rows($query) == 1){
						
						$result = mysqli_fetch_array($query);
						
						$staff_name = $result['firstname'].' '. $result['lastname'];
						
						$_SESSION['staffID'] = $result['staff_id'];
						$_SESSION['staffName'] = $staff_name;
						
						header("location:staff_page.php");
						
					}else{
						
						$err_msg= "Invalid Login Details!";
						
						echo "<p><em><strong>".$err_msg."</strong></em></p>";
						
					}
				}
			}
			?>
            <form id="fade" action="" method="post">
				<fieldset id="field"><br>
            <p><input type="text" name="staff_id" align="center" placeholder ="Staff ID" /></p><br>
            <p><input type="password" name="password" align="center" placeholder = "Password"/></p><br>
            <input type="submit" name="login" value="Login" /><br>
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
