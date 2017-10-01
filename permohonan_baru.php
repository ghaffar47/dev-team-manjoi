<?php include "include/dbconnect.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
  $page = 'mohon' ; 
  include 'include/header.php';
  include 'include/topnav.php';
  include 'include/function.php';
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
		<!--<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
		-->
        
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

  
<?php isset($_POST['permohonan_baru']);
     //receive all input values from the form

    $sekolah = $_POST['sekolah'];
    $kod_sekolah = $_POST['kod_sekolah'];
    $nama_pelapor = $_POST['nama_pelapor'];
    $jawatan_pelapor = $_POST['jawatan_pelapor'];
    $no_hubungi = $_POST['telefon_pelapor'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];
    $date = date('Y-m-d H:i:s');
    $id = unique_id(8);

    // form validation: ensure that the form is correctly filled
    if (empty($nama_pelapor)) { array_push($errors, "Sila lengkapkan Nama Pelapor"); }
    if (empty($jawatan_pelapor)) { array_push($errors, "Sila lengkapkan Jawatan Pelapor"); }
    if (empty($no_hubungi)) { array_push($errors, "Sila lengkapkan Nama Pelapor"); }
    if (empty($email)) { array_push($errors, "Sila lengkapkan email pelapor"); }
    if (empty($sekolah)) { array_push($errors, "Sila masukkan nama sekolah"); }
    if (empty($kod_sekolah)) { array_push($errors, "Sila masukkn kod sekolah"); }
    if (empty($keterangan)) { array_push($errors, "Sila masukkan laporan kerosakan"); };

    // Jika Permohonan baru tiada ralat




    $query = "INSERT INTO permohonan (sekolah, tarikh, no_tiket , kod_sekolah, nama_pelapor, jawatan_pelapor, telefon_pelapor, email, keterangan)VALUES('$sekolah','$date', '$id' , '$kod_sekolah', '$nama_pelapor', '$jawatan_pelapor', '$no_hubungi', '$email', '$keterangan')";
      

    mysqli_query($conn, $query);



if (mysqli_query($conn, $query)) {
    echo "Laporan anda telah berjaya dihantar";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

      //$_SESSION['success'] = "Berjaya Dihantar";
      //header('location: semak_status.php');
    
    
  
  ?>


    </div>
             <!-- /. PAGE INNER  -->
             
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php include 'include/script.php';?> 
    
   
</body>
</html>

