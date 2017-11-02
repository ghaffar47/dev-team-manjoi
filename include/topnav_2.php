           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
                    <?php  if (isset($_SESSION['username'])) : ?>
                    <font color="#FFFFFF"><p> Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                    <?php endif ?>
                    </font>
				  </li>
				
					<li><a class="<?php if($page=='home'){echo 'active-menu';}?>" href="index_ppd.php"><i class="fa fa-qrcode fa-3x"></i>Halaman Utama</a></li>
                    <li><a class="<?php if($page=='senarai'){echo 'active-menu';}?>" href="ppd_senarai_permohonan.php"><i class="fa fa-edit fa-3x"></i>Senarai Permohonan</a></li>
                   
					<li><a onclick="return confirm('Adakah anda pasti untuk daftar keluar?')" href="index.php"><i class="fa fa-square-o fa-3x"  ></i>Daftar Keluar</a></li>							
					
				      
                </ul>
               
            </div>
            
        </nav> 
