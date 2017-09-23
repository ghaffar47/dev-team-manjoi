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
				
					<li><a class="<?php if($page=='home'){echo 'active-menu';}?>" href="index.php"><i class="fa fa-qrcode fa-3x"></i>Halaman Utama</a></li>
                    <li><a class="<?php if($page=='mohon'){echo 'active-menu';}?>" href="permohonan_baru.php"><i class="fa fa-edit fa-3x"></i>Permohonan Baru</a></li>
                    <li><a class="<?php if($page=='semak'){echo 'active-menu';}?>"  href="semak_status.php"><i class="fa fa-desktop fa-3x"></i>Semak Status Permohonan</a></li>
                    <li><a class="<?php if($page=='hubungi'){echo 'active-menu';}?>" href="hubungi.php"><i class="fa fa-sitemap fa-3x"></i>Hubungi Kami</a></li>
					<li><a  href="login.php"><i class="fa fa-square-o fa-3x"></i>Daftar Keluar</a></li>							
					
				      
                </ul>
               
            </div>
            
        </nav> 