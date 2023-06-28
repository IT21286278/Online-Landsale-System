<?php

//database connection creation

$servername = "localhost";
$username = "root";
$password = "";
$DBname = "gl";

$con=new mysqli($servername,$username,$password,$DBname);

// Check connection
if($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}

?>