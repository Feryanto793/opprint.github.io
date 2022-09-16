<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	
      <center><h1><?php echo $_SESSION['username'] ?></h1></center>

		<h2>Menampilkan data dari database</h2>
		
	</div>
	
	<br/>

	<a href="indexbarang.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama barang</td>
				<td><input type="text" name="tipe"></td>					
			</tr>	
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>