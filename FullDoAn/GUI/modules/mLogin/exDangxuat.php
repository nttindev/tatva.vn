<?php
         if(isset($_POST['logout']))
         {
               @session_start();
              session_unset();
             session_destroy();
      
    		 echo "<script>window.open('index.php','_self')</script>";
    	
    		exit();
              
         }
?>