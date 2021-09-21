<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("sql11.freemysqlhosting.net", "sql11438943", "GSpufrRdCq", "sql11438943"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>