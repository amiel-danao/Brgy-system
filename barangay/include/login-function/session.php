<?php 
	session_start();

   if($_SESSION['status'] != "Login" || empty($_SESSION['status']) || empty($_SESSION['bcode']) || empty($_SESSION['bname']))
        {
            header("Location: index.php");
            exit();
        }
    else
	    {
	    	$brgycode = $_SESSION['bcode'];
	    	$brgyname = $_SESSION['bname'];
	    }

?>