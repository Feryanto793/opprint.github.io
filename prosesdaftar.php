<?php require_once("koneksi.php");
$nama=$_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!";
echo "<a href= daftar.php > Back</a>";
} else {
if(!$nama || !$username || !$pass) {
echo "Masih ada data yang kosong!";
echo "<a href= daftar.php >&amp;amp;laquo; Back</a>";
} else {
$simpan = mysql_query("INSERT INTO user(nama, username, password) VALUES('$nama','$username','$pass')");
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href= login.php >Login</a>";
} else {
echo "Proses Gagal!";
}
}
}
?>