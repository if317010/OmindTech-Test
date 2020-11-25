<?php
include '../model/koneksi.php';
$id         = $_GET['id'];
$akun  = mysqli_query($koneksi, "select * from data_guru where id='$id'");
$row        = mysqli_fetch_array($akun);
// membuat data guru menjadi dinamis dalam bentuk array
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Guru</title>
    </head>
    <body>
        <form method="post" action="../controller/_update_data_guru.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
                <tr><td>EMAIL</td><td><input type="text" value="<?php echo $row['email'];?>" name="email"></td></tr>
                <tr><td>MAPEL</td><td><input type="text" value="<?php echo $row['mapel'];?>" name="mapel"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="../view/_user_view.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
