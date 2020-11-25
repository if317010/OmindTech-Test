<?php
//Include file koneksi ke database
include "../model/koneksi.php";
include "../view/_data_guru.php";

//menerima nilai dari kiriman form guru
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$mapel=$_POST["mapel"];

//Query input menginput data kedalam tabel guru
  $sql="insert into data_guru (nama,alamat,email,mapel) values
		('$nama','$alamat','$email','$mapel')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
  header("location:../view/_user_view.php");
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}

?>
