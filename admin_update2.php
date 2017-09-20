<?php include ('server.php') ?>

<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id_user, $username, $email, $level_user, $error)

{

?>
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

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id_user" value="<?php echo $id_user; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id_user; ?></p>

<strong>Nama Pengguna: *</strong> <input type="text" name="username" value="<?php echo $username; ?>"/><br/>

<strong>Email: *</strong> <input type="text" name="email" value="<?php echo $email; ?>"/><br/>

<strong>Level Pengguna: *</strong> <input type="text" name="level_user" value="<?php echo $level_user; ?>"/><br/>

<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>
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

<?php

}


// connect to the database

include('koneksi2.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id_user']))

{

// get form data, making sure it is valid

$id_user = $_POST['id_user'];

$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));

$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));



// check that firstname/lastname fields are both filled in

if ($username == '' || $email == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id_user, $username, $email, $level_user, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE user SET username='$username', email='$email', level_user='$level_user' WHERE id_user='$id_user'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: admin_update.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id_user']) && is_numeric($_GET['id_user']) && $_GET['id_user'] > 0)

{

// query db

$id_user = $_GET['id_user'];

$result = mysql_query("SELECT * FROM user WHERE id_user=$id_user")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$username = $row['username'];

$email = $row['email'];

$level_user = $row['level_user'];



// show form

renderForm($id_user, $username, $email, $level_user, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>