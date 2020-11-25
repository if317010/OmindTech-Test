<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
</head>
<body>

<h2>Form Pendaftaran Anggota</h2>
    <form action="../controller/_pendaftaran_siswa.php" method="post">
	<table>
	  <tr>
	      <td><label>Nama:</label></td><td><input type="text" name="nama_siswa" placeholder="Masukan Nama" /></td>
	  </tr>
	  <tr>
	      <td><label>Alamat:</label></td><td><textarea name="alamat_siswa" rows="5" placeholder="Masukan Alamat" ></textarea></td>
	  </tr>
	  <tr>
	      <td><label>No HP:</label></td><td><input type="text" name="no_hp" placeholder="Masukan No HP" /></td>
	  </tr>
	</table>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
