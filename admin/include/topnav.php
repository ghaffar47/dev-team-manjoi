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
                
                   
                   
                    <li><a class="<?php if($page=='admin'){echo 'active-menu';}?>" href="index.php"><i class="fa fa-desktop fa-3x"></i>Pendaftaran Baru</a></li>
                    <li><a class="<?php if($page=='update'){echo 'active-menu';}?>" href="update.php"><i class="fa fa-qrcode fa-3x"></i>Kemaskini Profile</a></li>
                    <li><a  href="../logout.php"><i class="fa fa-bar-chart-o fa-3x"></i>Daftar Keluar</a></li>                  
                    
                      
                </ul>
               
            </div>
            
        </nav> 


