<?php

$dbhost = "localhost";
$dbemail = "root";
$dbpass = "";
$dbname = "csalgo";

if(!$con = mysqli_connect($dbhost,$dbemail,$dbpass,$dbname))
{
	die("Failed to connect");
}
?>