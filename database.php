<?php

/**
 * @file
 * Connect to mysql
 */

//Create connection credentials
$db_host = 'localhost';  // All the time it is localhost
$db_name = 'YOUR_DB_NAME'; //
$db_user = 'YOUR_USER_NAME';
$db_pass = 'YOUR_PASSWORD';

//Create mysqli object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
