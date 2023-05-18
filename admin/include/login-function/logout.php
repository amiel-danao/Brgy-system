<?php 
session_start();	
	session_destroy();
	unset($_SESSION['status']);
	unset($_SESSION['bcode']);
	unset($_SESSION['bname']);
	header("Location: ../../index.php");


?>