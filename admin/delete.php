<?php

/*

DELETE.PHP

Deletes a specific entry from the 'user' table

*/



// connect to the database

include('../include/dbconnect.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id_user']) && is_numeric($_GET['id_user']))

{

// get id value

$id_user = $_GET['id_user'];



// delete the entry

$result = "DELETE FROM user WHERE id_user=$id_user";





// redirect back to the view page

header("Location: update.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: update.php");

}



?>