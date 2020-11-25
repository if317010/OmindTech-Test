<?php
include '../model/koneksi.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$nama_siswa           = $_POST['nama_siswa'];
$alamat_siswa        = $_POST['alamat_siswa'];
$no_hp  = $_POST['no_hp'];
// query SQL untuk insert data
$query="UPDATE data_siswa SET nama_siswa='$nama_siswa',alamat_siswa='$alamat_siswa',no_hp='$no_hp' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman _admin_view.php
header("location:../view/_admin_view.php");
?>
