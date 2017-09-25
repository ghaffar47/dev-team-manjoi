<?php include('../include/dbconnect.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
$page = 'admin' ; 
include ('include/header.php') ;
include ('include/topnav.php') ;
?>

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
                
              <form method="post" action="index.php">

<?php include ('include/function.php') ?>
<?php include ('include/errors.php') ?>

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
<?php include ('include/script.php') ?>
    
   
</body>
</html>

