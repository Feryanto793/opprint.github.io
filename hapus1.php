<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM admin WHERE id='$id'")or die(mysql_error());

header("location:editadmin.php?pesan=hapus");
?>