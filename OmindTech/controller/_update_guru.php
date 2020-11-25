<?php
include '../model/koneksi.php';
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$nama           = $_POST['nama'];
$username        = $_POST['username'];
$password  = $_POST['password'];
$level         = $_POST['level'];
// query SQL untuk insert data
$query="UPDATE user SET nama='$nama',username='$username',password='$password',level='$level' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman _admin_view.php
header("location:../view/_admin_view.php");
?>
