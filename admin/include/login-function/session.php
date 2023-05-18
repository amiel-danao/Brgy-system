<?php 
	session_start();

   if($_SESSION['status'] != "Login" || empty($_SESSION['status']) )
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