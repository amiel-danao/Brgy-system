<?php   
 	// $localhost = "localhost";
	// $username = "root";
	// $password = "";
	// $DBname   = "obis";

	define('localhost', 'localhost');
	define('username', 'root');
	define('password', '');
	define('DBname', 'obis');

  	$db = new mysqli(localhost,username,password,DBname);

  	if($db->connect_error)
  	{
  		die("Connect Error:" . $db->connect_error);
  	}

?>