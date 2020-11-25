<!DOCTYPE html>
<html>
<head>
	<title>Halaman Guru</title>
</head>
<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Guru</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="../view/_data_guru.php">CREATE DATA GURU</a><br/><br/>
	<a href="../view/_data_nilai_siswa.php">CRUD NILAI SISWA</a><br/><br/>
	<a href="../view/data_guru.php">DATA GURU</a><br/><br/>
	<a href="../view/nilai_siswa.php">DATA NILAI SISWA</a><br/><br/>



	<a href="../view/_login.php">LOGOUT</a>

	<br/>
	<br/>

</body>
</html>
