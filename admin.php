

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>E-Print</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /*    --------------------------------------------------
	:: General
	-------------------------------------------------- */
body {
	font-family: 'Open Sans', sans-serif;
	color: #353535;
}
.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}
.ckbox label {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ckbox label:before {
	content: '';
	top: 1px;
	left: 0;
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	border-radius: 2px;
	border: 1px solid #bbb;
	background-color: #fff;
}
.ckbox input[type="checkbox"]:checked + label:before {
	border-color: #2BBCDE;
	background-color: #2BBCDE;
}
.ckbox input[type="checkbox"]:checked + label:after {
	top: 3px;
	left: 3.5px;
	content: '\e013';
	color: #fff;
	font-size: 11px;
	font-family: 'Glyphicons Halflings';
	position: absolute;
}
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}
.table-filter .media-photo {
	width: 35px;
}
.table-filter .media-body {
    display: block;
    /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
}
.table-filter .media-meta {
	font-size: 11px;
	color: #999;
}
.table-filter .media .title {
	color: #2BBCDE;
	font-size: 14px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.pagado {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.cancelado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
	<div class="container">
	<div class="row">

		<section class="content">
			<center><h2>Order Zona Accecories</h2></center><br/>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
				
					<div class="panel-body">
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
								
								
								<?php
								$batas=15; //satu halaman menampilkan xxx baris
					            
								$posisi=null;
								if(empty($style)){
									$posisi=0;
									$halaman=1;
								}else{
									$posisi=($style-1)* $batas;
								}
								
								
								  include"koneksi.php";
								  $sql = "SELECT id,nama,hp,ymd,invoice,alamat,SUM(harga * qty) AS totalorder,SUM(qty) AS totalqty FROM pesanan GROUP BY invoice order by ymd desc limit $posisi,$batas";
								  $tampilkan = mysql_query($sql);				 		 	
								 		 
								  while($select_result = mysql_fetch_array($tampilkan))
									{
									$id	 	= $select_result['id'] ;
									$nama	 	= $select_result['nama'] ;
									$alamat	 	= $select_result['alamat'] ;
									$hp		 	= $select_result['hp'] ;
									$ymd	 	= $select_result['ymd'] ;
									$invoice 	= $select_result['invoice'] ;
									$totalorder	= $select_result['totalorder'] ;
									$totalqty 	= $select_result['totalqty'] ;
									
									echo"
									<tr>
									<td>
											<div class='media' >
												<a href='#' class='pull-left'>
													<img src='https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg' class='media-photo'>
												</a>
												<div class='media-body' data-toggle='modal' data-target='#edit$invoice'  >
													<span class='media-meta pull-right glyphicon glyphicon-calendar '> $ymd</span>
													<h4 class='title'>
														<a href='order.php?invoice=$invoice' target='_blank'>$nama $hp</a>
													</h4>
													<p class='summary'>
													<button class='btn btn-warning btn-xs' ><span class='glyphicon glyphicon-tag'> $invoice </span></button>
													<button class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-shopping-cart'> $totalqty </span></button>
													<button class='btn btn-info btn-xs' ><span class='glyphicon glyphicon-usd'> $totalorder </span></button>
													
													</p>

														 </div> 
												</div>
											</div>
										</td>
									</tr>
									";}
									
								  ?>

								
								
								
											</tbody>
							</table>
							<ul class="pagination pull-right">
							<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
							<?php		
					//=============PAGING ========================
							$sql_paging = mysql_query("SELECT id FROM pesanan GROUP BY invoice  ");
							$jmldata = mysql_num_rows($sql_paging);
							$jumlah_halaman = ceil($jmldata / $batas);

							
							for($i = 1; $i <= $jumlah_halaman; $i++)
								 {
									echo "<li><a href='admin1.php?style=$i'>$i</a></li>";
								} 
							mysql_close();?>
							<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
							</ul>
								<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
<?php
								  include"koneksi.php";
								  $sql1 = "SELECT invoice FROM pesanan GROUP BY invoice";
								  $tampilkan1 = mysql_query($sql1);				 		 	
								 		 
								  while($select_result = mysql_fetch_array($tampilkan1))
									{
$invoice 	= $select_result['invoice'] ;
echo"

<div class='modal fade' id='edit$invoice' tabindex='-1' role='dialog' aria-labelledby='edit$invoice' aria-hidden='true'>
      <div class='modal-dialog'>
    <div class='modal-content'>
          <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button>
        <h4 class='modal-title custom_align' id='Heading'>Detail Order Invoice: $invoice</h4>
      </div>
          <div class='modal-body'>
    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='order.php?invoice=$invoice' style='border:0'></iframe></div>
      </div>
      
        </div>
    
  </div>
      
									</div>";}?>
    
				
	<center><a href="logout.php"><button type='button' class='btn btn-danger'>logout</button></a></center>
				
				<div class="content-footer">
					<p>
						Form Order PHP © - 2020 <br>
						Powered By <a href="http://www.bayuajie.com/blog/" target="_blank">Feryanto R. Prakoso</a>
					</p>
				</div>
			</div>
		</section>
		
	</div>
</div>
	<script type="text/javascript">
	$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
	</script>
</body>
</html>
