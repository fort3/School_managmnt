<?php

    function authenticate(){
        
        if(!isset($_SESSION['staffID']) && !isset($_SESSION['staffName'])){
            
            header("location:staff.php");
            
        }
        
    }

?>