<?php
session_start(); 
date_default_timezone_set("Asia/Kolkata");

$setcon = 2;
if($setcon == 1) {
    $servername = "localhost";
    $username = "fioten_latest";
    $password = "lancius12#";
    $dbname = "fioten_latest";
} else {
    $servername = "192.168.0.104";  
    $username = "root";
    $password = "root";
    $dbname = "fioten_latest_new";
}  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$base_url = "https://lanciussolutions.com/fioten_latest/";
$base_url = "http://localhost/fioten_latest_new/";
 
?>