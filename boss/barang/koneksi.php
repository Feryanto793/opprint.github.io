<?php
$host = "localhost";
$user_name = "root";
$password = "";
$database = "12";

$koneksi = mysql_connect($host, $user_name, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

//if ($pilihdatabase) echo"Berhasilkonek";
// else echo "Gagal Koneksi";
?>