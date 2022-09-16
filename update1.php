<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysql_query("UPDATE `admin` SET `nama` = '$nama', `username` = '$username', `password` = '$password' WHERE `admin`.`id`= '$id'");

header("location:editadmin.php?pesan=update");

?>