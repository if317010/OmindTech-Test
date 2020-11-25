<?php
include '../model/koneksi.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$nama_siswa           = $_POST['nama_siswa'];
$nilai_akhir_siswa        = $_POST['nilai_akhir_siswa'];
// query SQL untuk insert data
$query="UPDATE nilai_akhir SET nama_siswa='$nama_siswa',nilai_akhir_siswa='$nilai_akhir_siswa' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman _user_view.php
header("location:../view/_user_view.php");
?>
