<!DOCTYPE html>
<html>
<head>
<title>Form Nilai Akhir</title>
</head>
<body>

<h2>Form Nilai AKhir</h2>
    <form action="../controller/_create_nilai_akhir.php" method="post">
	<table>
	  <tr>
	      <td><label>Nama Siswa:</label></td><td><input type="text" name="nama_siswa" placeholder="Masukan Nama Siswa" /></td>
	  </tr>
    <tr>
	      <td><label>Nilai Akhir:</label></td><td><input type="text" name="nilai_akhir_siswa" placeholder="Masukan Nilai Akhir Siswa" /></td>
	  </tr>
	</table>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
