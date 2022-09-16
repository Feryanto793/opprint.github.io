<!DOCTYPE html>
<html>
<head>
	<title>E-Print</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>SILAHKAN DAFTAR TERLEBIH DAHULU</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="prosesdaftar.php" method="post" onSubmit="return validasi()">
		<div>
				<label>Nama:</label>
				<input type="text" name="nama" id="nama" />
			</div>
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Daftar" class="tombol">
				<td colspan="2" align="right">Sudah punya akun? <a href="loginuser.php"><b>Login</b></a>
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (nama != "" && username != "" && password!="") {
			return true;
		}else{
			alert('Tidak boleh kosong !');
			return false;
		}
	}

</script>
</html>