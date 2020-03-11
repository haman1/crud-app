<?php 

$host = "localhost";
$username = "mnare";
$password = "ganja";
$dbname = "crud";

$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
	die("Connection failed" . mysqli_errno($con));
}

 ?>