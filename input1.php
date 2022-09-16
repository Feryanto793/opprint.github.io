<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div class="judul">		
		<h1>Input Dengan Benar</h1>
		<h2>Menampilkan data dari database</h2>
		<h3></h3>
	</div>
	
	<br/>

	<a href="editadmin.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi1.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>