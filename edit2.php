
<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<div class="judul">		
		<h1>Edit Dengan Benar</h1>
		<h2>Menampilkan data dari database</h2>
		<center><h1><?php echo $_SESSION['username'] ?></h1></center>
	</div>
	
	<br/>
	
	<a href="editpesanan.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM pesanan WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update2.php" method="post">		
		<table>
			<tr>
				<td>tipe</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="tipe" value="<?php echo $data['tipe'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
			</tr>	
			<tr>
				<td>qty</td>
				<td><input type="text" name="qty" value="<?php echo $data['qty'] ?>"></td>					
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
									
			</tr>
			<tr>
				<td>no hp</td>
				<td><input type="text" name="hp" value="<?php echo $data['hp'] ?>"></td>
									
			</tr>
		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>	

		</table>
	</form>
	<?php } ?>
</body>
</html>