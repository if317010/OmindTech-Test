<?php
//Include file koneksi ke database
include "../model/koneksi.php";
include "../view/_crud_akun_guru.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$password=$_POST["password"]; 
$level=$_POST["level"];



//Query input menginput data kedalam tabel guru
  $sql="insert into user (username,nama,password,level) values
		('$username','$nama','$password','$level')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
  header("location:../view/_admin_view.php");
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}

?>
