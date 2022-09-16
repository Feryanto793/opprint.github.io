<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	<center><h2><?php echo $_SESSION['username'] ?></h2></center>
		<h2>Menampilkan data dari database</h2>
		
		
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>no</th>
            <th>id</th>
			<th>nama</th>
			<th>nama barang</th>
			<th>harga</th>
			<th>qty</th>
			<th>alamat</th>
			<th>hp</th>
			<th>aksi</th>
			
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM pesanan")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tipe']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['qty']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['hp']; ?></td>
			<td>
			
				<a class="hapus" href="hapuspesanan.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
		<center><a href="kembali.php"><button type='button' class='btn btn-danger'>kembali</button></a></center>
	</table>
</body>
</html>