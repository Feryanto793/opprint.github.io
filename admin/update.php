<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

mysql_query("UPDATE `pesanan` SET `nama` = '$nama', `tipe` = '$tipe', `harga` = '$harga', `qty` = '$qty', `alamat` = '$alamat', `hp` = '$hp' WHERE `admin`.`id`= '$id'");

header("location:edit.php?pesan=update");

?>