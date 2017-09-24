<?php

//calling name

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="smart-team";

// Connect to Database

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if ($conn->connect_error) {
	die('sambungan gagal: ' . $conn->connect_error);
} 

//PDO connection

try{
	$conndbo = new PDO("mysql:host=$dbservername;dbname=$dbname;", $dbusername, $dbpassword);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}