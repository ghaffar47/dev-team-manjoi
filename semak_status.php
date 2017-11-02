
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
  $page = 'semak' ; 
  include 'include/header.php';
  include 'include/topnav.php';
  include 'include/dbconnect.php';
 ?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>SEMAK STATUS PERMOHONAN</h2> 
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                
              <div class="col-md-9 col-sm-12 col-xs-12">
               
               <div id="main">
		<form method="post" action="semak_status.php">
			<input type="text" name="q" placeholder="Nombor Tiket..">
		
			<select name="column">
				<option value="">Sila Pilih</option>
				<option value="no_tiket">nombor tiket</option>
				<option value="kod_sekolah">Kod Sekolah</option>
				
			</select>	
			<input type="submit" name="submit" value="Semak">
            <br>
         
		</form>
    <?php
	if (isset($_POST['submit'])) {
		
		$q = $conn->real_escape_string($_POST['q']);
		$column = $conn->real_escape_string($_POST['column']);
		
		
		
		if ($column == "" || ($column != "no_tiket"))
			$column = "no_tiket";
			

		$sql = $conn->query("SELECT * FROM permohonan WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
				echo "NOMBOR TIKET : " . $data['no_tiket'] ."<br>"."KOD SEKOLAH : " . $data['kod_sekolah'] ."<br>"."STATUS PERMOHONAN : " . $data['status']."<br>";
		
		}else


		



			echo "Your search query doesn't match any data!";
			
		
		
	}
	?>
    <div>
                </div>
             <!-- /. PAGE INNER  -->
             
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php include 'include/script.php';?>  
</body>
</html>

