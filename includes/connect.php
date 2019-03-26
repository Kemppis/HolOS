<?php

$dbServername = "mysli.oamk.fi";	//Server Name
	$dbUsername = "t7matu00";			//User Name
	$dbPassword = "2g5SbHtb8XX6rcPb";		//Password
	$dbName = "opisk_t7matu00";			//Database Name

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	try
	{
	 $conn_string = "mysql:host=mysli.oamk.fi;dbname=opisk_t7matu00";	//Server Name and Database Name
	 $db = new PDO ($conn_string, "t7matu00", "2g5SbHtb8XX6rcPb");		//User Name and Password
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
?>