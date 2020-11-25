<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
   <a href="../view/_crud_akun_guru.php">CRUD AKUN GURU</a><br/><br/>
   <a href="../view/_crud_data_siswa.php">CRUD DATA SISWA</a><br/><br/>
	 <a href="../view/akun_guru.php">AKUN</a><br/><br/>
	 <a href="../view/data_siswa.php">DATA SISWA</a><br/><br/>




  <a href="../view/_login.php">LOGOUT</a>


</body>
</html>
