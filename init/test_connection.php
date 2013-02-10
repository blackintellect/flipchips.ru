<?php
/* Use this script to test connection with database */

include_once 'init.php';

@$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if (mysqli_connect_errno()) { 
	die(format("Connection failed: %s", mysqli_connect_error()));
}

printf("Connected!");
