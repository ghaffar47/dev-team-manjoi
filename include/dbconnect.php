<?php

//calling name

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="smart-team";

// Connect to Database

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
