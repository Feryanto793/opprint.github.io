<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM pesanan WHERE id='$id'")or die(mysql_error());

header("location:editpesanan.php?pesan=hapus");
?>