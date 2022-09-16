<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];


mysql_query("INSERT INTO admin VALUES('','$nama','$username','$password')");

header("location:indexadmin.php?pesan=input");
?>