<!DOCTYPE html>
<html>
    <head>
        <title>AKUN</title>
    </head>
    <body>
        <h2>List Akun</h2>
        <table border="1">
            <tr><th>NO</th><th>Nama</th><th>Username</th><th>Level</th><th>ACTION</th></tr>
            <?php
            include '../model/koneksi.php';
            $akun = mysqli_query($koneksi, "SELECT * from user");
            $no = 1;
            foreach ($akun as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['level'] . "</td>
            <td><a href='../view/_edit_guru.php?id=$row[id]'>Edit</a>
                <a href='../controller/_delete_akun.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>

    </body>
</html>
