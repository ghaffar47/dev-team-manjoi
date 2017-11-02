<?php include "include/dbconnect.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php 
  $page ='mohon';
  include 'include/header.php';
  include 'include/topnav_2.php';
  include 'include/function.php';
  
  
  // connect to database
  $db = mysqli_connect("localhost", "root", "", "smart-team");
  
  $id_mohon = $_REQUEST['no_tiket'];

  $permohonan = mysqli_query($db, "SELECT * FROM permohonan WHERE id_mohon=".$id_mohon);
  $row = mysqli_fetch_array($permohonan);
  
  // edit/update data
  if($_POST["submit"]): 
      if(isset($_GET['no_tiket'])){
    $sekolah = $_GET['sekolah'];
    $no_tiket = $_GET['no_tiket'];
    $query="update permohonan set sekolah='".$_POST["sekolah"]."',jawatanpelapor='".$_POST["jawatanpelapor"]."' where id_mohon='".$_POST["no_tiket"]."'";
    $result = $mysqli->query($query) or die($mysqli->error.LINE);
    }
  endif;
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
                            Lengkapkan borang ini</div>
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
        <p><strong>TARIKH PERMOHONAN: <?php echo $row['tarikh'];?></strong></p>
        
       <p><strong>NAMA SEKOLAH:</strong><label class="form-control"><?php echo $row['sekolah'];?></label>
       
       <input type="hidden" name="no_tiket" id="hiddenField" value="<?php echo $row['id_mohon'];?>">
      
        
        <strong>KOD SEKOLAH:</strong><label class="form-control"><?php echo $row['kod_sekolah'];?></label>
        
        
        <strong>NAMA PEMOHON:</strong><label class="form-control"><?php echo $row['nama_pelapor'];?></label>
       
        
        <strong>JAWATAN PEMOHON:</strong><label class="form-control"><?php echo $row['jawatan_pelapor'];?></label>
        
        
        <strong>NOMBOR TELEFON:</strong><label class="form-control"><?php echo $row['telefon_pelapor'];?></label>
       
        
         <strong>EMAIL RASMI:</strong><label class="form-control"><?php echo $row['email'];?></label>
         
        
        <strong>KETERANGAN:</strong>
        <textarea name="keterangan" rows="20" class="form-control"><?php echo $row['keterangan'];?></textarea>
       
        
  <strong>TINDAKAN PERMOHONAN</strong>
  <textarea name="laporan_pantau" rows="20" class="form-control"><?php echo $row['laporan_pantau'];?></textarea>
        
        
        <strong>SENARAI AHLI YANG TERLIBAT </strong>
        <textarea name="kumpulan" rows="20" class="form-control"><?php echo $row['kumpulan'];?></textarea>
        
        
        <strong>LAPORAN SELESAI TUGAS</strong>
        <textarea name="laporan_selesai" rows="20" class="form-control"><?php echo $row['laporan_selesai'];?></textarea>
        
        <strong>STATUS : </strong>
        <input name="status" rows="20" class="form-control" value="<?php echo $row['status'];?>">
        
        
        
        <button type="submit" name="submit" id="add_btn" class="add_btn" onclick="return confirm('Adakah Anda Pasti Untuk Kemaskini Permohonan?')">Kemaskini</button>
        
 
</form>