
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
$page = 'update'; 
include ('include/header.php');
include ('include/topnav.php'); 
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>KEMASKINI PROFIL PENGGUNA
                </h2></div></div>
                 <!-- /. ROW  -->
                 <hr />
                
              
<?php

include('../include/dbconnect.php');


// get result from database

$sql = "SELECT * FROM user";

$result = $conn->query($sql);

// display data in table

echo "<p><b> Senarai Pengguna</b></p>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID Pengguna</th><th>Nama Pengguna</th><th>Alamat Email</th><th>Level Pengguna</th><th></th><th></th></tr>";

    // loop through results of database query, displaying them in teh table

    while($row = mysqli_fetch_array($result)) {

// echo out the contents of each row into a table

        echo "<tr>";

        echo '<td>' . $row['id_user'] . '</td>';

        echo '<td>' . $row['username'] . '</td>';

        echo '<td>' . $row['email'] . '</td>';

        echo '<td>' . $row['level_user'] . '</td>';

        echo '<td><a href="edit.php?id=' . $row['id_user'] . '">Edit</a></td>';

        echo '<td><a href="delete.php?id='.$row['id_user'] . '">Delete</a></td>';
    }

    //close table
    echo "</table>";
?>

<p><a href="index.php">Tambah Pengguna Baru</a></p>

    </div>
             <!-- /. PAGE INNER  -->
             
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

<?php include ('include/script.php') ?>
    
   
</body>
</html>

