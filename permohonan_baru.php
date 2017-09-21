<?php include "server2.php"?>
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
				<li class="text-center"></font>
				  </li>
				
					<li><a href="index.php"><i class="fa fa-qrcode fa-3x"></i>Halaman Utama</a>
                    </li>
                    <li><a class="active-menu" href="permohonan_baru.php"><i class="fa fa-edit fa-3x"></i>Permohonan Baru</a></li>
                    <li><a  href="semak_status.php"><i class="fa fa-desktop fa-3x"></i>Semak Status Permohonan</a></li>
                    <li><a  href="hubungi.php"><i class="fa fa-sitemap fa-3x"></i>Hubungi Kami</a></li>
					<li><a  href="login.php"><i class="fa fa-square-o fa-3x"></i>Daftar Masuk</a></li>					
					
				      
                </ul>
               
            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PERMOHONAN BARU</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="panel panel-default">
                        <div class="panel-heading">
                            Lengkapkan borang ini</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Borang Permohonan Smart Team</h3>
                                    <br>
                                 
                                    
     <form method="post" action="permohonan_baru.php" class="input_form">
		<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
		
        
 		<div class="form-group">
        <label>NAMA SEKOLAH<font color="#FF0000">*</font></label>
        <input class="form-control" type="text" name="sekolah" />
        
        <label>KOD SEKOLAH<font color="#FF0000">*</font></label>
        <input class="form-control" type="text" name="kod_sekolah" />
        
        <label>NAMA PELAPOR<font color="#FF0000">*</font></label>
        <input class="form-control" type="text" name="nama_pelapor" />
        
        <label>JAWATAN PELAPOR<font color="#FF0000">*</font></label>
        <input class="form-control" type="text" name="jawatan_pelapor"/>
        
        <label>NOMBOR TELEFON<font color="#FF0000">*</font></label>
        <input class="form-control" type="number" name="telefon_pelapor"/>
        
        <label>EMAIL<font color="#FF0000">*</font></label>
        <input class="form-control" type="text" name="email"/>
        
        <label>KETERANGAN<font color="#FF0000">*</font></label>
        <textarea name="keterangan" rows="10" class="form-control"></textarea>
        
        
        
        
        
        <br><br>
        <button type="submit" name="submit" id="add_btn" class="add_btn">hantar</button>
        <button type="reset" class="btn btn-primary">Padam</button>
 
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

