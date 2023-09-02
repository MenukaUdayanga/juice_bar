<?php 

$dbServerName ="localhost";
$dbUserName ="Menuka";
$dbPassword ="Menuka";
$dbName ="newjuicebar";
$port ="3308";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName,$port );

if(!$conn){

    die("Connection failed :" .mysqli_connect_error());
}


?>
