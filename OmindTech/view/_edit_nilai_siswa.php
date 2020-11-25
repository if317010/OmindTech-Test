<?php
include '../model/koneksi.php';
$id         = $_GET['id'];
$akun  = mysqli_query($koneksi, "select * from nilai_akhir where id='$id'");
$row        = mysqli_fetch_array($akun);
// membuat data nilai siswa menjadi dinamis dalam bentuk array
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Nilai Siswa</title>
    </head>
    <body>
        <form method="post" action="../controller/_update_nilai_siswa.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama_siswa'];?>" name="nama_siswa"></td></tr>
                <tr><td>NILAI</td><td><input type="text" value="<?php echo $row['nilai_akhir_siswa'];?>" name="nilai_akhir_siswa"></td></tr>
            	   </tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="../view/_user_view.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
