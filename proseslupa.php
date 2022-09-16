<?php require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];


if(!$username || !$pass) {
echo "Masih ada data yang kosong!";
echo "<a href= lupapassword.php >&amp;amp;laquo; Back</a>";
} else {
$simpan = mysql_query("UPDATE `user` SET `password` = '$pass' WHERE `user`.`username` = '$username'");
if($simpan) {
echo "Ganti password berhasil, Silahkan <a href= login.php >Login</a>";
} else {
echo "Proses Gagal!";
}
}

?>