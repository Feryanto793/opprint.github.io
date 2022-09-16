
<html>
<head>
<title>Order online</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>

</head>
<body>


<?php
include"koneksi.php";

 // setting nama folder tempat upload
 $uploaddir = 'data/';
		  
 // membaca nama file yang diupload
 $fileName = $_FILES['userfile']['name'];     
  
 // nama file temporary yang akan disimpan di server
 $tmpName  = $_FILES['userfile']['tmp_name']; 
  
 // membaca ukuran file yang diupload
 $fileSize = $_FILES['userfile']['size'];
  
 // membaca jenis file yang diupload
 $fileType = $_FILES['userfile']['type'];

 $query = "SELECT count(*) as jum FROM pesanan WHERE name = '$fileName'";
 $hasil = mysql_query($query);
 $data  = mysql_fetch_array($hasil);
  
 if ($data['jum'] > 0)
 {
	$query = "UPDATE pesanan SET size = '$fileSize' WHERE name = '$fileName'";
 }
 else $query = "INSERT INTO pesanan (name, size, type) VALUES ('$fileName', '$fileSize', '$fileType')";
  
 mysql_query($query);
  
 // menggabungkan nama folder dan nama file
 $uploadfile = $uploaddir . $fileName;
  
 // proses upload file ke folder 'data'
 if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	 echo "File telah diupload";
 } else {
	 echo "File gagal diupload";
 }
  

//menangkap data yang dipostkan pembeli
$alamat		= $_POST['alamat'] ;
$hp 		= $_POST['hp'] ;
$catatan 		= $_POST['catatan'] ;
$nama 		= $_POST['nama'] ;
$name 		= $fileName ;
$size 		= $fileSize ;
$type 		= $fileType ;

$tipe		= $_POST['tipe'] ;
$harga		= $_POST['harga'] ;
$qty		= $_POST['qty'] ;
$count = count($tipe);
$ymd = date("d-m-y");
$invoice = mt_rand(100000,999999); 

//perintah query insert ke table pemesanan
$sql = "insert into pesanan (tipe,harga,qty,nama,name,type,size,alamat,hp,catatan,ymd,invoice) values";
				
//perintah seleksi data pesanan kecuali yang 0 //
$seleksi="SELECT * FROM pesanan WHERE qty <>'0' and invoice='$invoice'";

//perintah hapus row yang qty = 0 //
$hapusrow="DELETE FROM pesanan WHERE qty='0'";


for( $i=0; $i < $count; $i++ )
{
    $sql .= "('{$tipe[$i]}','{$harga[$i]}','{$qty[$i]}','$nama','$name','$size','$type','$alamat','$hp','$catatan','$ymd','$invoice')";
    $sql .= ",";
}
 
$sql = rtrim($sql,",");
//eksekusi query insert
$insert = mysql_query($sql);
 
if( !$insert )
{
    echo "gagal insert : $insert ";
}else{

//eksekusi hapus row yang qty = 0 //
$hapus = mysql_query($hapusrow);

//hitug dan tampilkan jumlah total order                        
        $hitung="SELECT SUM(harga * qty) AS totalorder,SUM(qty) AS totalqty FROM pesanan WHERE invoice='$invoice' GROUP BY invoice";
	$vhitung = mysql_query($hitung);   
        $hasil = mysql_fetch_array($vhitung);
        $totalorder 	= $hasil['totalorder'] ;
        $totalqty 	= $hasil['totalqty'] ;
        

//tampilkan order pembeli//
echo"
<div class='container'>
	 
	  <div class='alert alert-warning' role='alert'>
	  <center><h2><b>$nama</b></h2></center>
	  </div>
	
	<table class='table table-striped'><col style='width: 30%;'><col style='width: 70%;'>
	<tbody>
	<tr><td>Tanggal Order</td><td>$ymd</td></tr>
	<tr><td>Nama</td><td>$nama</td></tr>
	<tr><td>Alamat</td><td>$alamat</td></tr>
	<tr><td>HP</td><td>$hp</td></tr>
	<tr><td>Catatan</td><td>$catatan</td></tr>
	<tr><td>Gambar</td><td><img style='height: 200px' src='data/$fileName'></td></tr>
	<tr><td>Nomer Invoice</td><td><a href='order.php?invoice=$invoice' target='_blank'><h3><span class='label label-info'>$invoice</span></h3></a></td></tr>

	
		<tr><td>Total Item</td><td><h3><span class='label label-warning'>$totalqty</span></h3></td></tr>
        <tr><td>Tagihan </td><td><h3><span class='label label-danger'>$totalorder</span></h3></td></tr>
	</tbody>
	</table>
	<br/>	
	
	";
	
	echo"<br/>
	<div class='alert alert-info' role='alert'>
	<center>Daftar item yang dipesan</center>
	</div>
	<table class='table table-striped'>
		<thead>
			<tr>
			 <th>nama barang</th>
			  <th>Harga</th>
			  <th>Qty</th>
			  <th>Sub Total</th>
			</tr>
		  </thead>
	     <tbody>";

	
 
		
		  
		  
		 // menyimpan properti atau informasi file ke tabel upload dalam db
		 // dengan terlebih dahulu mengecek ada tidaknya nama file dalam tabel
		  
		
	
		 
	//perintah seleksi data pesanan kecuali yang 0 //
	$seleksi="SELECT * FROM pesanan WHERE qty <>'0' and invoice='$invoice'";	 
	$tampilkan = mysql_query($seleksi);
	while($select_result = mysql_fetch_array($tampilkan))
	{
	$tipea	 	= $select_result['tipe'] ;
	$hargaa	 	= $select_result['harga'] ;
	$qtya	 	= $select_result['qty'] ;
	
	echo"<tr><td>$tipea</td><td>$hargaa</td><td>$qtya</td></tr> ";
				}
	
        echo"<tr><td><b></b></td><td><h3><span class='label label-info'>TOTAL</span></h3></td><td><h3><span class='label label-warning'>$totalqty</span></h3></td><td><h3><span class='label label-danger'>$totalorder</span></h3></td></tr> ";
        
	echo"</tbody></table>";
  
        echo"
	<div class='alert alert-warning' role='alert'>
	<center><a href='javascript:if(window.print)window.print()'>
	<button type='button' class='btn btn-success'><span class='glyphicon glyphicon-print' aria-hidden='true'></span>Cetak halaman ini</button></a></center>
	</div>
        </div>
	";

        
        
	



}

	
?>




<center><a href="logout.php"><button type='button' class='btn btn-danger'>Logout</button></a></center>
</body>
</html>