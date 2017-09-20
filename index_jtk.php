<?php include ("server.php") ?>
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
				
					<li><a class="active-menu" href="index.php"><i class="fa fa-qrcode fa-3x"></i>Halaman Utama</a>
                    </li>
                    <li><a href="permohonan_baru.php"><i class="fa fa-edit fa-3x"></i>Senarai Tugasan</a></li>
                    <li><a  href="semak_status.php"><i class="fa fa-desktop fa-3x"></i>Semak Status Tugasan</a></li>
                    <li><a  href="hubungi.php"><i class="fa fa-sitemap fa-3x"></i>Laporan</a></li>
					<li><a  href="login.php"><i class="fa fa-square-o fa-3x"></i>Daftar Keluar</a></li>					
					
				      
                </ul>
               
            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <div class="row">
                    <div class="col-md-12">
                     <h2>HALAMAN UTAMA JURUTEKNIK KOMPUTER</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
<hr />
              <form>
  <font style="border-bottom:double">Pengenalan Sistem </font><br>
  Sistem permohonan ini merangkumi keseluruhan aspek perjalanan proses permohonan dan bertujuan mempermudahkan pengguna membuat permohonan SMART TEAM. selain dari itu, sistem ini juga memudahkan pihak pentadbir JPN memantau perjalanan permohonan sehingga akhir proses. 


<br><br>Bagi peringkat permulaan sistem ini hanya akan merangkumi proses permohonan dan diikuti dengan proses-proses lain yang berikutnya.

<br><br><font style="border-bottom:double">Objektif </font><br>

  Menggunakan teknologi masa kini bagi mempermudahkan perhubungan dan mempercepatkan proses permohonan SMART TEAM.

<br><br><font style="border-bottom:double">CARTA ALIR PERMOHONAN BIASA</font><br><br>
<img src="assets/img/carta_alir.jpg" width="600" height="688">
</h1>
  
                <table width="310">
                  
                  
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

