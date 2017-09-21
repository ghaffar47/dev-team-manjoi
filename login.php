
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
  <title>Sistem Permohonan Smart Team</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

</head>

<body>
 <div class="wrapper">
	<div class="container">
		<h1>SISTEM PERMOHONAN SMART TEAM</h1>
	
    <?php
	include ('config.php');
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$stmt=$db->prepare("SELECT * FROM user WHERE username=? AND password=?");
		$stmt->bindParam(1, $username);
		$stmt->bindParam(2, $password);
		$stmt->execute();
		$row=$stmt->fetch();
		$user=$row['username'];
		$pass=$row['password'];
		$id=$row['id_user'];
		$level=$row['level_user'];
		if($username==$user && $pass==$password){
			session_start();
			$_SESSION['username']=$user;
			$_SESSION['password']=$pass;
			$_SESSION['id_user']=$id;
			$_SESSION['level_user']=$level;
			if($level=='sekolah'){
			?>
			<script>window.location.href='index.php'</script>
			<?php
            } 
			if($level=='admin'){
			?>
			<script>window.location.href='index_admin.php'</script>
			<?php }
			if($level=='ppd'){
			?>
			<script>window.location.href='index_ppd.php'</script>
			<?php }
			else {
			?>
            <script>window.location.href='index_jtk.php'</script>
            <?php
			}
	} else{
		?>
        <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
        <strong>Maaf!</strong> Password dan username anda salah, tolong ulangi
        </div>
        <?php
        }
        }
        ?>

	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
          
		</div>
		<a  href="index.php"></i>Kembali ke Halaman Utama</a>
	</form>
    
</div>

<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  
</body>
</html>
