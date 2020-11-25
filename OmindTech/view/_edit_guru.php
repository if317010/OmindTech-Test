<?php
include '../model/koneksi.php';
$id         = $_GET['id'];
$akun  = mysqli_query($koneksi, "select * from user where id='$id'");
$row        = mysqli_fetch_array($akun);
// membuat data guru menjadi dinamis dalam bentuk array
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Guru</title>
    </head>
    <body>
        <form method="post" action="../controller/_update_guru.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>USERNAME</td><td><input type="text" value="<?php echo $row['username'];?>" name="username"></td></tr>
                <tr><td>PASSWORD</td><td><input type="text" value="<?php echo $row['password'];?>" name="password"></td></tr>
                <tr>
            	      <td><label>Level:</label></td><td>
                     <select value="<?php echo $row['level'];?>" name="level" >
                     <option value="">Pilih</option>
                     <option value="admin">admin</option>
                     <option value="guru">guru</option>
                   </select>
                 </td>
            	   </tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="../view/_admin_view.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
