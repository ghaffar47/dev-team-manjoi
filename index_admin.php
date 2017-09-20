<?php include('server.php') ?>
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
				
					
                    <li><a class="active-menu" href="index_admin.php"><i class="fa fa-desktop fa-3x"></i>Pendaftaran Baru</a></li>
                    <li><a  href="admin_update.php"><i class="fa fa-qrcode fa-3x"></i>Kemaskini Profile</a></li>
					<li><a  href="login.php"><i class="fa fa-bar-chart-o fa-3x"></i>Daftar Keluar</a></li>					
					
				      
                </ul>
               
            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PENDAFTARAN BARU</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                
              <form method="post" action="index_admin.php">

		<?php include('errors.php'); ?>
 <table width="310">
		<div class="input-group">
			<tr><th>Nama Pengguna</th>
			<th><input type="text" name="username" value="<?php echo $username; ?>"></th></tr>
		</div>
		<div class="input-group">
			<tr><th><label>Alamat Email</label></th>
			<th><input type="email" name="email" value="<?php echo $email; ?>"></th>
		</div>
		<div class="input-group">
			<tr><th><label>Katalaluan</label></th>
			<th><input type="password" name="password_1"></th></tr>
		</div>
		<div class="input-group">
			<tr>
			  <th>Sahkan Katalaluan</th>
			<th><input type="password" name="password_2"></th></tr>
		</div>
        <div class="input-group">
			<tr>
			  <th>Level Pengguna</th>
			<th><select type="level_user" name="level_user">
            <option value="Select">Select</option>}
            <option value="sekolah"> sekolah </option>
            <option value="ppd"> ppd</option>
            <option value="jtk"> jtk</option>
            <option value="admin"> admin</option>
            </select>
            </th></tr>
		</div>
		<div class="input-group">
			<tr><th><button type="submit" class="btn" name="reg_user">Daftar</button></th></tr>
		</div>
		</table>
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

