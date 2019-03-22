<?php
// this is the config file for the project

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cse';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>