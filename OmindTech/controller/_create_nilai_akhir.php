<?php
//Include file koneksi ke database
include "../model/koneksi.php";

include "../view/_data_nilai_siswa.php";

//menerima nilai dari kiriman form nilai
$nama_siswa=$_POST["nama_siswa"];
$nilai_akhir_siswa=$_POST["nilai_akhir_siswa"];

//Query input menginput data kedalam tabel nilai
  $sql="insert into nilai_akhir (nama_siswa,nilai_akhir_siswa) values
		('$nama_siswa','$nilai_akhir_siswa')";

//Mengeksekusi/menjalankan query diatas
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data";
  header("location:../view/_user_view.php");
	exit;
  }
else {
	echo "Gagal simpan data";
	exit;
}

?>
