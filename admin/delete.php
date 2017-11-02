<?php

/*

DELETE.PHP

Deletes a specific entry from the 'user' table

*/



// connect to the database

include('../include/dbconnect.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id_user = $_GET['id'];



// delete the entry

$result = "DELETE FROM user WHERE id_user=$id_user";
mysqli_query($conn, $result); 




// redirect back to the view page
echo '<script type="text/javascript">'; 
echo 'alert("PENGGUNA BERJAYA DIPADAM");'; 
echo 'window.location = "update.php";';
echo '</script>';

}

else

// if id isn't set, or isn't valid, redirect back to view page

{
echo '<script type="text/javascript">'; 
echo 'alert("PENGGUNA TIDAK BERJAYA DIPADAM");'; 
echo 'window.location = "update.php";';
echo '</script>';

}



?>