<?php
include '../model/koneksi.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$nama           = $_POST['nama'];
$alamat        = $_POST['alamat'];
$email  = $_POST['email'];
$mapel         = $_POST['mapel'];
// query SQL untuk insert data
$query="UPDATE data_guru SET nama='$nama',alamat='$alamat',email='$email',mapel='$mapel' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman _user_view.php
header("location:../view/_user_view.php");
?>
