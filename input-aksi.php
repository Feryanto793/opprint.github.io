<?php 
include 'koneksi.php';
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];


mysql_query("INSERT INTO barang VALUES('','$tipe','$harga')");

header("location:indexboss.php?pesan=input");
?>