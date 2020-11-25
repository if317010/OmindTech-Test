<?php
//Include file koneksi ke database
include "../model/koneksi.php";
include "../view/_crud_data_siswa.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama_siswa"];
$alamat=$_POST["alamat_siswa"]; 
$no_hp=$_POST["no_hp"];



//Query input menginput data kedalam tabel siswa
  $sql="insert into data_siswa (nama_siswa,alamat_siswa,no_hp) values
		('$nama','$alamat','$no_hp')";

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
