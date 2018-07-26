<?php

/**
 * @file
 * Connect to mysql
 */

//Create connection credentials
$db_host = 'localhost';
$db_name = 'laravel';
$db_user = 'laravel';
$db_pass = 'abcd1234';

//Create mysqli object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
