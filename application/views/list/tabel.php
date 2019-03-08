<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/we.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
 </style>";
 ?>

</head>
<body >
	<div class="container " role="main">

    <div class="row" style="margin-top:  80px;">
</div>
</div>
<div class="row">
     <div class="container ">
<div class= "col-sm-12">
    <div id="form-center">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Daftar Antrian Pasien</h3>
</div>
<div class="panel-body">
	<table class="table table-bordered" width="100%">
	<thead>
	<tr>
		<th width ='10%'>ID</th>
		<th width ='15%'>Jenis Layanan</th>
		<th width ='8%'>Nama</th>
		<th width ='14%' >Jenis Kelamin</th>
		<th width ='15%' >Alamat</th>
		<th width ='20%' >Tanggal Periksa</th>
		<th width ='15%' >Phone</th>
		 <th width ='15%' ></th>
	</tr>
</thead>

<tbody>
	 
</tbody>
<div class="container " role="main">
<div class="row" style="margin-bottom: 10px;">
<a href="<?php echo base_url()?>index.php/transaksi_c/laptrx" ><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
 </table> 
 <?php echo $pagination; ?>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>

</body>
</html>