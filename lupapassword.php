<!DOCTYPE html>
<html>
<head>
	<title>E-Print</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>SILAHKAN GANTI PASSWORD ANDA</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="proseslupa.php" method="post" onSubmit="return validasi()">
		<div>

			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Ganti Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
            <input type="submit" value="Ganti" class="tombol">
				<td colspan="2" align="right"><a href="loginuser.php"><b>kembali</b></a>
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Tidak boleh kosong !');
			return false;
		}
	}

</script>
</html>