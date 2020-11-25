<!DOCTYPE html>
<html>
    <head>
        <title>NILAI</title>
    </head>
    <body>
        <h2>List Nilai</h2>
        <table border="1">
            <tr><th>NO</th><th>Nama</th><th>Nilai Akhir</th><th>ACTION</th></tr>
            <?php
            include '../model/koneksi.php';
            $akun = mysqli_query($koneksi, "SELECT * from nilai_akhir");
            $no = 1;
            foreach ($akun as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama_siswa'] . "</td>
            <td>" . $row['nilai_akhir_siswa'] . "</td>
            <td><a href='../view/_edit_nilai_siswa.php?id=$row[id]'>Edit</a>
                <a href='../controller/_delete_nilai_siswa.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>

    </body>
</html>
