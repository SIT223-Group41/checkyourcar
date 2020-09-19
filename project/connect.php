<?php
$db_localhost='localhost';
$db_username='root';
$db_password='';
$db='checkyourcar';

/* Attempt to connect to MySQL database */
$mysqli = new mysqli($db_localhost, $db_username, $db_password, $db);


// Check connection
if($mysqli->connect_errno){
    die("ERROR: Could not connect to database. (" .$mysqli->connect_errno. ") " . $mysqli->connect_error);
}
