<?php
include '../model/koneksi.php';
$id         = $_GET['id'];
$akun  = mysqli_query($koneksi, "select * from data_siswa where id='$id'");
$row        = mysqli_fetch_array($akun);
// membuat data siswa menjadi dinamis dalam bentuk array
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Siswa</title>
    </head>
    <body>
        <form method="post" action="../controller/_update_siswa.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama_siswa'];?>" name="nama_siswa"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" value="<?php echo $row['alamat_siswa'];?>" name="alamat_siswa"></td></tr>
                <tr><td>NO HP</td><td><input type="text" value="<?php echo $row['no_hp'];?>" name="no_hp"></td></tr>
            	   </tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="../view/_admin_view.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
