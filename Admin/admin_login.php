<?php

session_start();
include('C:\wamp\www\School Management\db_con.php');

?>
<html>
    <head>
        <title>
            Swaps University | Admin
        </title>
    </head>
    <body>
        <div id="container">
    	<div id="header"><h1 align="center">Swaps University Information Management System</h1></div>
        <div id="nav">
		
        </div>
        
        <div id="content" align="center">
        
        	<div id="c1">
            	<h2 align="center">Admin Login </h2>
            </div>
            <div id="c2">
            <p>Please Login below</p>
            <?php
            
            if(isset($_POST['login'])){
                
                $error = array();
                
                if(empty($_POST['admin_name'])){
                    
                    $error[] = "Please enter admin name";
                    
                }else{
                    
                    $admin_name = mysqli_real_escape_string($db,$_POST['admin_name']);
                    
                }
                if(empty($_POST['password'])){
                    
                    $error[] = "Please enter your password";
                    
                }else{
                    
                    $password = md5(mysqli_real_escape_string($db,$_POST['password']));
                    
                }
                if(empty($error)){
                    
                  $query = mysqli_query($db,"SELECT * FROM admin WHERE admin_name = '".$admin_name."' AND secured_password = '".$password."'") or die(mysqli_error($db));
                    
                    //echo mysqli_num_rows($query);
                    
                    if(mysqli_num_rows($query) == 1){
                        
                        $result = mysqli_fetch_array($query);
                        
                        $_SESSION['administrator_id'] = $result['admin_id'];
                        $_SESSION['administrator_name'] = $result['admin_name'];
                        
                        header("location:admin_nav.php");
                        
                    }else{
                        
                        $error_msg = "invalid admin name and password";
                        header("location:admin_login.php?err=$error_msg");
                        
                    }
                    
                }else{
                    
                    foreach($error as $error){
                        
                        echo "<p>".$error."</p>";
                        
                    }
                }
            }
            if(isset($_GET['err'])){
                
                echo $_GET['err'];
                
            }
            
            
            ?>
            <form action="" method="post">
                
            <p><input type="text" name="admin_name" /></p>
            <p><input type="password" name="password" /></p>
            <input type="submit" name="login" value="Login" />
            
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