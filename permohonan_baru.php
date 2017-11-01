<?php 
include "include/dbconnect.php"; 

$sekolaherr = $kod_sekolaherr = $nama_pelaporerr = $jawatan_pelaporerr = $no_hubungierr = $emailerr = $keteranganerr =  "";
$sekolah = $kod_sekolah = $nama_pelapor = $jawatan_pelapor = $no_hubungi = $email = $keterangan =  "";


include "include/function.php";
$ids = unique_id(8);


if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["sekolah"])){
        $sekolaherr = 'sila masukkan nama sekolah.';
    }else{
        $sekolah = filterString($_POST["sekolah"]);
        if($sekolah == FALSE){
            $sekolaherr = 'sila masukkan nama sekolah.';
        }
    }

    if(empty($_POST["kod_sekolah"])) {
      $kod_sekolaherr = 'sila masukkan kod sekolah.';
    }else{
      $kod_sekolah = filterString($_POST["kod_sekolah"]);
      if($kod_sekolah == FALSE){
        $kod_sekolaherr = 'sila masukkan kod sekolah.';
      }
    }

    if(empty($_POST["nama_pelapor"])) {
      $nama_pelaporerr = 'sila masukkan nama anda.';
    }else{
      $nama_pelapor = filterName($_POST["nama_pelapor"]);
      if($nama_pelapor == false){
        $nama_pelaporerr = 'sila masukkan nama anda.';
      }
    }


    if(empty($_POST["jawatan_pelapor"])) {
      $jawatan_pelaporerr = 'sila masukkan jawatan anda.';
    }else{
      $jawatan_pelapor = filterString($_POST["jawatan_pelapor"]);
      if($jawatan_pelapor == false){
        $jawatan_pelaporerr = 'sila masukkan jawatan anda.';
      }
    }

    if(empty($_POST["no_hubungi"])) {
      $no_hubungierr = 'sila masukkan no telefon anda.';
    }else{
      $no_hubungi = filterphone($_POST["no_hubungi"]);
      if($no_hubungi == false){
        $no_hubungierr = 'sila masukkan no telefon anda iaitu 9 angka bagi talian tetap (termasuk kod kawasan) atau 10 angka untuk talian mudah alih.';
      }
    }

    if(empty($_POST["email"])) {
      $emailerr = 'sila masukkan email anda.';
    }else{
      $email = filterEmail($_POST["email"]);
      if($email == false){
        $emailerr = 'sila masukkan email dengan format yang betul.';
      }
    }

    if(empty($_POST["keterangan"])) {
      $keteranganerr = 'sila masukkan keterangan anda.';
    }else{
      $keterangan = filtermessage($_POST["keterangan"]); 
    }



        
if(empty($sekolaherr) && empty($kod_sekolaherr) && empty($nama_pelaporerr) && empty($nama_pelaporerr) && empty($jawatan_pelaporerr) && empty($no_hubungierr) && empty($emailerr) && empty($keteranganerr))  {           

$query = "INSERT INTO permohonan (sekolah, no_tiket , kod_sekolah, nama_pelapor, jawatan_pelapor, telefon_pelapor, email, keterangan)VALUES('$sekolah', '$ids' , '$kod_sekolah', '$nama_pelapor', '$jawatan_pelapor', '$no_hubungi', '$email', '$keterangan')";

//$query = "INSERT INTO permohonan (SEKOLAH, kod_sekolah) VALUES ('$sekolah', '$kod_sekolah')";

mysqli_query($conn, $query);

  

  $new = mysqli_insert_id($conn);
  $pilih = "SELECT no_tiket FROM permohonan WHERE id_mohon = $new" ;

  $result = mysqli_query($conn, $pilih);
  $tiketing = mysqli_fetch_assoc($result);

mysqli_close($conn);

//echo "<script type='text/javascript'>alert('anda telah berjaya menghantar permohonan')</script>";
echo '<script type="text/javascript">'; 
echo 'alert("anda telah berjaya menghantar permohonan, sekian terima kasih..... sila salin no tiket anda untuk rujukan semula '.$tiketing['no_tiket'].'");'; 
echo 'window.location = "index.php";';
echo '</script>';
    }else{
      echo "<script type='text/javascript'>alert('sila lengkapkan semua medan')</script>";
    }
}    
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
  </style>

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
	
        
 		<div class="form-group">
        <label>NAMA SEKOLAH<font color="#FF0000">* <span><?php echo $sekolaherr; ?></span></font></label>
        <input class="form-control" type="text" name="sekolah" id="sekolah" value="<?php echo $sekolah; ?>">

        
        <label>KOD SEKOLAH<font color="#FF0000">* <span><?php echo $kod_sekolaherr ?> </span></font></label>
        <input class="form-control" type="text" name="kod_sekolah" id="kod_sekolah" value="<?php echo $kod_sekolah; ?>">
        
        
        <label>NAMA PELAPOR<font color="#FF0000">* <SPAN><?PHP echo $nama_pelaporerr ?></SPAN></font></label>
        <input class="form-control" type="text" name="nama_pelapor" id="nama_pelapor" value = "<?php echo $nama_pelapor; ?>">
        
        
        <label>JAWATAN PELAPOR<font color="#FF0000">* <span><?php echo $jawatan_pelaporerr ?></span></font></label>
        <input class="form-control" type="text" name="jawatan_pelapor" id="jawatan_pelapor" value="<?php echo $jawatan_pelapor; ?>">
        
        
        <label>NOMBOR TELEFON<font color="#FF0000">* <span><?php echo $no_hubungierr ?></span></font></label>
        <input class="form-control" name="no_hubungi" id="no_hubungi" value="<?php echo $no_hubungi; ?>">
        
        
        <label>EMAIL<font color="#FF0000">* <span><?php echo $emailerr ?></span></font></label>
        <input class="form-control" type="text" name="email" id="email" value="<?php echo $email; ?>">
        
        
        <label>KETERANGAN<font color="#FF0000">* <span><?php echo $keteranganerr ?></span></font></label>
        <textarea name="keterangan" rows="10" class="form-control" id="keterangan" value="<?php echo $keterangan; ?>"></textarea>

        
        
        
        
        
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

