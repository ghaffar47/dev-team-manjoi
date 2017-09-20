<?php
$host="localhost";
$username="root";
$password="";
$dbname="smart-team";

// Connect to Database

$connection = mysql_connect($host,$username,$password)

or die ("Could not connect to server ... \n" . mysql_error ());

mysql_select_db($dbname)

or die ("Could not connect to database ... \n" . mysql_error ());

?>