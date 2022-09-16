<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="form order tempered glass ">
    <meta name="author" content="zona accesories">
    <title>Order Online</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->
  </head>
  <body>
    <div class="container">
      <p><div class="alert alert-warning" role="alert">
      <center><h2><?php echo $_SESSION['username'] ?></h2></center>
  </div>
	<form action='save-order-tg.php' method='post' enctype="multipart/form-data">
	 <table class="table table-striped">   
	   <tbody>
        <tr>
        <th scope="row">Nama</th>
	    <td></td>
        <td></td>
        <td><input type="text" class="form-control" name="nama"></td>
        </tr>
        <tr>
        <th scope="row">Alamat lengkap</th>
	    <td></td>
        <td></td>
        <td><textarea class="form-control" rows="3" name="alamat"></textarea></td>        
        </tr>
        <tr>
        <th scope="row">HP</th>
	    <td></td>
        <td></td>
        <td><input type="text" class="form-control" name="hp"></td>
        </tr>
        <tr>
        <th scope="row">Catatan</th>
	    <td></td>
        <td></td>
        <td><textarea class="form-control" rows="3" name="catatan"></textarea></td>        
        </tr>
        <tr>
        <th scope="row">Upload Gambar</th>
	    <td></td>
        <td></td>
        <td> 
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
     <input name="userfile" accept="image/*" type="file" />
    </td>
</form>
    </tr>
	</tbody>
	</table>
	<br/><br/>
	<div class='alert alert-info' role='alert'>
	<center>Daftar item yang dipesan</center>
	</div>
  <table class="table table-striped">
  <thead>
    <tr>
      
      <th>Type</th>
      <th>Harga</th>
      <th>Qty</th>
    </tr>
  </thead>
  <tbody>
    <?php
  include"koneksi.php";
  $sql = "select tipe,harga from barang ORDER BY tipe";
  $tampilkan = mysql_query($sql); 
  while($select_result = mysql_fetch_array($tampilkan))
	{
	$tipe	 	= $select_result['tipe'] ;
	$harga	 	= $select_result['harga'] ;
    echo"
    <tr>  		
      <td>$tipe<input type='hidden' class='form-control' value='$tipe'name='tipe[]' readonly></td>
      <td><input type='text' class='form-control' value='$harga'name='harga[]' readonly></td>
      <td><input type='number' class='form-control' name='qty[]'></td>
    </tr>";}
	?>
</tbody>
</table>
	<div class="form-group">
		<center><button type="submit" class="btn btn-primary">Submit</button></center>
	</div>
	</form>
  </p>
      <footer class="footer">
        <p><center>&copy; Feryanto R. Prakoso 2020</center></p>
      </footer>
    </div> <!-- /container -->   
  </body>
</html>




