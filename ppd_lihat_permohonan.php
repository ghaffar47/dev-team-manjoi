<?php include "include/dbconnect.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php 
  $page ='senarai';
  include 'include/header.php';
  include 'include/topnav_2.php';
  include 'include/function.php';
  
  
 
  
  $id_mohon = $_REQUEST['no_tiket'];

  $permohonan = mysqli_query($conn, "SELECT * FROM permohonan WHERE id_mohon=".$id_mohon);
  $row = mysqli_fetch_array($permohonan);
  
  // edit/update data
  if(isset($_POST["submit"])) {
    $no_tiket = $_POST['no_tiket'];
    $pantau = $_POST['laporan_pantau'];  
    $kumpulan = $_POST['kumpulan'];
    $laporan_selesai = $_POST['laporan_selesai'];
    $status = $_POST['status'];
    $query = "UPDATE permohonan SET laporan_pantau = '$pantau', pegawai_pantau = 'pegawai_pantau', kumpulan = '$kumpulan' , laporan_selesai = '$laporan_selesai', status = '$status' WHERE no_tiket = '$no_tiket'";
    mysqli_query($conn, $query);
    echo '<script type="text/javascript">'; 
    echo 'alert("KEMASKINI BERJAYA");'; 
    echo 'window.location = "ppd_senarai_permohonan.php";';
    echo '</script>';
    }
  
 ?>
 
  </head>
<body>
        <!— /. NAV SIDE  —>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>KEMASKINI STATUS PERMOHONAN</h2>   
                        
                       
                    </div>
                </div>
                 <!— /. ROW  —>
                 <hr />
                 <div class="panel panel-default">
                        <div class="panel-heading">
                            PROSES KERJA</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Borang Status Permohonan Smart Team</h3>
                                                                  
                                    
     <form method="post" action="permohonan_status.php" class="input_form">
  <?php if (isset($errors)) { ?>
      <p><?php echo $errors; ?></p>
    <?php } ?>
 
        
     <div class="form-group">
        <p><strong>NOMBOR TIKET: <?php echo $row['no_tiket'];?></strong></p>
        <p><strong>TARIKH PERMOHONAN:</strong></p><label class="form-control" style="color:#00C"><?php echo $row['tarikh'];?></label>
        
       <strong>NAMA SEKOLAH:</strong><label class="form-control" style="color:#00C"><?php echo $row['sekolah'];?></label>
       
       <input type="hidden" name="no_tiket" id="hiddenField" value="<?php echo $row['no_tiket'];?>">
      
        
        <strong>KOD SEKOLAH:</strong><label class="form-control" style="color:#00C"><?php echo $row['kod_sekolah'];?></label>
        
        
        <strong>NAMA PEMOHON:</strong><label class="form-control" style="color:#00C"><?php echo $row['nama_pelapor'];?></label>
       
        
        <strong>JAWATAN PEMOHON:</strong><label class="form-control" style="color:#00C"><?php echo $row['jawatan_pelapor'];?></label>
        
        
        <strong>NOMBOR TELEFON:</strong><label class="form-control" style="color:#00C"><?php echo $row['telefon_pelapor'];?></label>
       
        
         <strong>EMAIL RASMI:</strong><label class="form-control" style="color:#00C"><?php echo $row['email'];?></label>
         
        
        <strong>KETERANGAN:</strong>
        <label name="keterangan" class="form-control" style="color:#00C"><?php echo $row['keterangan'];?></label>
       
        
  <strong>TINDAKAN PERMOHONAN</strong>
  <label name="laporan_pantau" class="form-control" style="color:#00C"><?php echo $row['laporan_pantau'];?></label>
        
        <strong>PEGAWAI UNTUK PEMANTAUAN </strong>
        <label name="pegawai_pantau" class="form-control" style="color:#00C"><?php echo $row['pegawai_pantau'];?></label>
        
        <strong>SENARAI AHLI YANG TERLIBAT </strong>
        <label name="kumpulan" class="form-control" style="color:#00C"><?php echo $row['kumpulan'];?></label>
        
        
        <strong>LAPORAN SELESAI TUGAS</strong>
        <label name="laporan_selesai"  class="form-control" style="color:#00C"><?php echo $row['laporan_selesai'];?></label>
        
        <strong>STATUS : </strong>
        <label name="status" class="form-control" style="color:#00C"><?php echo $row['status'];?></label>
        
        
        
        <button type="submit" name="submit" id="add_btn" class="add_btn" onclick="return confirm('Adakah Anda Pasti Untuk Kemaskini Permohonan?')">Cetak</button>
        
 
</form>