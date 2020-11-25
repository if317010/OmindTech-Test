<!DOCTYPE html>
<html>
    <head>
        <title>DATA</title>
    </head>
    <body>
        <h2>List DATA</h2>
        <table border="1">
            <tr><th>NO</th><th>Nama</th><th>Alamat</th><th>Email</th><th>Mapel</th><th>ACTION</th></tr>
            <?php
            include '../model/koneksi.php';
            $akun = mysqli_query($koneksi, "SELECT * from data_guru");
            $no = 1;
            foreach ($akun as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['mapel'] . "</td>
            <td><a href='../view/_edit_data_guru.php?id=$row[id]'>Edit</a>
                <a href='../controller/_delete_data_guru.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>

    </body>
</html>
