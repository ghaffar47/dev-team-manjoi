<?php include ('server.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Permohonan Smart Team</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
                <h6>&nbsp;</h6> 
        </div>
          <h2><img src="assets/img/BANNER.jpg" width="1515" height="200"></h2>
      </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    <?php  if (isset($_SESSION['username'])) : ?>
                    <font color="#FFFFFF"><p> Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                    <?php endif ?>
                    </font>
				  </li>
				
					
                    <li><a href="index_admin.php"><i class="fa fa-desktop fa-3x"></i>Pendaftaran Baru</a></li>
                    <li><a class="active-menu" href="admin_update.php"><i class="fa fa-qrcode fa-3x"></i>Kemaskini Profile</a></li>
					<li><a  href="login.php"><i class="fa fa-bar-chart-o fa-3x"></i>Daftar Keluar</a></li>					
					
				      
                </ul>
               
            </div>
            
        </nav> 
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

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('koneksi2.php');



// get results from database

$result = mysql_query("SELECT * FROM user")

or die(mysql_error());



// display data in table

echo "<p><b>View All</b></p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID Pengguna</th> <th>Nama Pengguna</th> <th>Alamat Email</th> <th>Level Pengguna</th> <th></th> <th></th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id_user'] . '</td>';

echo '<td>' . $row['username'] . '</td>';

echo '<td>' . $row['email'] . '</td>';

echo '<td>' . $row['level_user'] . '</td>';

echo '<td><a href="admin_edit.php?id=' . $row['id_user'] . '">Edit</a></td>';

echo '<td><a href="admin_delete.php?id=' . $row['id_user'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="index_admin.php">Add a new record</a></p>

    </div>
             <!-- /. PAGE INNER  -->
             
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

