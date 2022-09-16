
<html>
<head>
<title>Order online</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>

</head>
<body>

<?php
//koneksi database, sesuaikan dengan username dan password database Anda
include"koneksi.php";


$invoice = $_GET['invoice'] ;
$ymd = date("d-m-y");


//hitug dan tampilkan jumlah total order                        
        $hitung="SELECT SUM(harga * qty) AS totalorder,SUM(qty) AS totalqty FROM pesanan WHERE invoice='$invoice' GROUP BY invoice";
	$vhitung = mysql_query($hitung);   
        $hasil = mysql_fetch_array($vhitung);
        $totalorder 	= $hasil['totalorder'] ;
        $totalqty 	= $hasil['totalqty'] ;
        
				
//perintah seleksi data pesanan kecuali yang 0 //
$selekdata="SELECT nama,alamat,hp,catatan,ymd,name FROM pesanan WHERE qty <>'0' and invoice='$invoice' group by invoice";
$showdata = mysql_query($selekdata);
$hasil = mysql_fetch_array($showdata);

$nama	= $hasil['nama'];
$alamat	= $hasil['alamat'];
$hp	= $hasil['hp'];
$catatan	= $hasil['catatan'];
$ymd	= $hasil['ymd'];
$fileName = $hasil['name'];
	
	echo"
	 <div class='container'>
	 <div class='row'>
	  <div class='col'></div>
	  <div class='col-5'>  
	  <div class='alert alert-warning' role='alert'>
	  <center><b><h1>$nama</h1></b></center>
	  </div>
	
	<table class='table table-striped'><col style='width: 30%;'><col style='width: 70%;'>
	<tbody>
        <tr><td>Tanggal Order</td><td>$ymd</td></tr>
	<tr><td>Nama</td><td>$nama</td></tr>
	<tr><td>Alamat</td><td>$alamat</td></tr>
	<tr><td>HP</td><td>$hp</td></tr>
	<tr><td>catatan</td><td>$catatan</td></tr>
	<tr><td>Gambar</td><td><img style='height: 200px' src='../user/data/$fileName'></td></tr>
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
			 <th>Type</th>
			  <th>Harga</th>
			  <th>Qty</th>
                          <th>Sub Total</th>
			</tr>
		  </thead>
	     <tbody>";
	
        //tampilkan daftar order dan subtotal
	$seleksi="SELECT tipe,harga,qty,harga*qty AS subtotal FROM pesanan WHERE invoice='$invoice'";
	$tampilkan = mysql_query($seleksi);
	while($select_result = mysql_fetch_array($tampilkan))
	{
	$tipea	 	= $select_result['tipe'] ;
	$hargaa	 	= $select_result['harga'] ;
	$qtya	 	= $select_result['qty'] ;
        $subtotal 	= $select_result['subtotal'] ;
	echo"<tr><td>$tipea</td><td>$hargaa</td><td>$qtya</td><td>$subtotal</td></tr> ";
				}
                                
        
        
        echo"<tr><td></td><td><b>TOTAL</b></td><td><h3><span class='label label-warning'>$totalqty</span></h3></td><td><h3><span class='label label-danger'>$totalorder</span></h3></td></tr> ";
        
	echo"</tbody></table>";
			
        echo"
        <br/>
	<div class='alert alert-warning' role='alert'>
	<center><a href='javascript:if(window.print)window.print()'>
	<button type='button' class='btn btn-success'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Cetak halaman ini</button></a></center>
	</div>
	";

?>
</body>
</html>