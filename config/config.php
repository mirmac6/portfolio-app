<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("eu-cdbr-west-01.cleardb.com", "b65cb4ee82bc31", "98def8df", "heroku_d4e8b5ad434fb73"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
