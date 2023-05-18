<?php
	 $localhost = "localhost";
	 $username = "root";
	 $password = "";
	 $DBname   = "obis";

	define('localhost', $localhost);
	define('username', $username);
	define('password', $password);
	define('DBname', $DBname);

	$db = new mysqli($localhost,$username,$password,$DBname);

  	if($db->connect_error)
  	{
  		die("Connect Error:" . $db->connect_error);
  	}

	$db2 = new mysqli($localhost,$username,$password, "obis2");

  	if($db2->connect_error)
  	{
  		die("Connect Error:" . $db2->connect_error);
  	}
?>