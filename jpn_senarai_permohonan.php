<?php include "include/dbconnect.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
  $page ='senarai';
  include 'include/header.php';
  include 'include/topnav_3.php';
  include 'include/function.php';
 ?>
 
 <?php 
  
  $errors = "";

 

  // insert a quote if submit button is clicked
  if (isset($_POST['submit'])) {

    if (empty($_POST['sekolah'])) {
      $errors = "You must fill in the sekolah";
    }else{
      $sekolah = $_POST['sekolah'];
      $query = "INSERT INTO permohonan (tarikh, no_tiket, sekolah, kod_sekolah, status) VALUES ( '$tarikh', '$no_tiket', '$sekolah', '$kod_sekolah', '$status')";
      mysqli_query($conn, $query);
      header('location: ppd_senarai_permohonan.php');
    }
  }  

  // delete 
  if (isset($_GET['del_sekolah'])) {
    $id_mohon = $_GET['del_sekolah'];

    mysqli_query($conn, "DELETE FROM permohonan WHERE id_mohon=".$id_mohon);
    header('location: ppd_senarai_permohonan.php');
  }

  // select all sekolah if page is visited or refreshed
  $permohonan = mysqli_query($conn, "SELECT * FROM permohonan ORDER BY tarikh DESC  ");
  
  // edit/update data
  if(isset($_GET['no_tiket'])){
$sekolah = $_GET['sekolah'];
$no_tiket = $_GET['no_tiket'];
$
$query="update tasks set status='$sekolah' where id_mohon='$no_tiket'";
$result = $mysqli->query($query) or die($mysqli->error.LINE);
$result = $mysqli->affected_rows;
$json_response = json_encode($result);
}

?>
        
    
        <!— /. NAV SIDE  —>
        <div id="page-wrapper" >
            <div id="page-inner">
              <div class="row">
                    <div class="col-md-12">
                     <h2>SENARAI PERMOHONAN</h2>   
                      
                      <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Tarikh</th>
                                            <th>Nombor Tiket</th>
                                            <th>Sekolah</th>
                                            <th>Kod Sekolah</th>
                                            <th>Status</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>  
                                    
                                    
         

    <tbody>
      <?php $i = 1; while ($row = mysqli_fetch_array($permohonan)) { ?>
        <tr>
        <td> <?php echo $i; ?> </td>
          <td class="tarikh"> <?php echo $row['tarikh']; ?> </td>
          <td class="no_tiket"> <?php echo $row['no_tiket']; ?> </td>
          <td class="sekolah"> <?php echo $row['sekolah']; ?> </td>
          <td class="kod_sekolah"> <?php echo $row['kod_sekolah']; ?> </td>
          <td class="status"> <?php echo $row['status']; ?> </td>
          <td class="update"><a href="jpn_status.php?no_tiket=<?php echo $row['id_mohon'] ?>&sekolah=<?php echo $row['sekolah'] ?>">Lihat</a></td>
        </tr>
      <?php $i++; } ?>  
    </tbody>
  </table>
                    </div>
                </div>
                 <!— /. ROW  —>
<hr />
              
    </div>
             <!— /. PAGE INNER  —>
             
            </div>
         <!— /. PAGE WRAPPER  —>
        </div>
     <!— /. WRAPPER  —>
    <?php include 'include/script.php';?>     
    
   
</body>
</html>