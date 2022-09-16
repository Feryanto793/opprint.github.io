<?php 

include 'koneksi.php';
$id = $_POST['id'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];

mysql_query("UPDATE `barang` SET `tipe` = '$tipe', `harga` = '$harga' WHERE `barang`.`id`= '$id'");

header("location:indexboss.php?pesan=update");

?>