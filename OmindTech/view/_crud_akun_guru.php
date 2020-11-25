<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
</head>
<body>

<h2>Form Pendaftaran Anggota</h2>
    <form action="../controller/_pendaftaran_guru.php" method="post">
	<table>
          <tr>
              <td><label>Username:</label></td><td><input type="text" name="username" placeholder="Masukan Username" /></td>
	  </tr>
	  <tr>
	      <td><label>Nama:</label></td><td><input type="text" name="nama" placeholder="Masukan Nama" /></td>
	  </tr>
	  <tr>
	      <td><label>Password:</label></td><td><input type="password" name="password" placeholder="Masukan Password" /></td>
	   </tr>
     <tr>
 	      <td><label>Level:</label></td><td>
          <select name="level">
          <option value="">Pilih</option>
          <option value="admin">admin</option>
          <option value="guru">guru</option>
        </select>
      </td>
 	   </tr>
	</table>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
