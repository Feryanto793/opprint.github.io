
<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Edit Dengan Benar</h1>
		<h2>Menampilkan data dari database</h2>
		<center><h1><?php echo $_SESSION['username'] ?></h1></center>
	</div>
	
	<br/>
	
	<a href="indexadmin.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM admin WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
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