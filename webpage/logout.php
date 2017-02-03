<?php

session_start();

if($_GET['action'] == "logout")
        {
      
            unset($_SESSION['userid']);
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            session_destroy();
            echo 'logout succeed！<br> wait 3 seconde for refresh,if not <a href="login.php">click here for login</a>';
			header("refresh:3;url=login.php");
            exit;
        } 
?>