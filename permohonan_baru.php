<?php include "include/dbconnect.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
  $page = 'mohon' ; 
  include 'include/header.php';
  include 'include/topnav.php';
 ?>

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
<?php include 'include/script.php';?> 
    
   
</body>
</html>

