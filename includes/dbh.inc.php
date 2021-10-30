<?php

$serverName = "localhost";
$DBUsername = "mfzen";
$DBPassword = "123";
$DBName = "loginproject01";

//Put this to get detailed error messages
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect($serverName,$DBUsername,$DBPassword,$DBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());

}
