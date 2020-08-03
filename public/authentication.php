<?php

    function authenticate(){
        
        if(!isset($_SESSION['matricNumber']) && !isset($_SESSION['studentName'])){
            
            header("location:student.php");
            
        }
        
    }

?>