<!DOCTYPE html>
<html>
    <head>
        <title>AKUN</title>
    </head>
    <body>
        <h2>List Akun</h2>
        <table border="1">
            <tr><th>NO</th><th>Nama</th><th>Alamat</th><th>No HP</th><th>ACTION</th></tr>
            <?php
            include '../model/koneksi.php';
            $akun = mysqli_query($koneksi, "SELECT * from data_siswa");
            $no = 1;
            foreach ($akun as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama_siswa'] . "</td>
            <td>" . $row['alamat_siswa'] . "</td>
            <td>" . $row['no_hp'] . "</td>
            <td><a href='../view/_edit_data_siswa.php?id=$row[id]'>Edit</a>
                <a href='../controller/_delete_siswa.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>

    </body>
</html>
