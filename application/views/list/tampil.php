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
		<th width ='3%'>ID</th>
		<th width ='11%'>Jenis Layanan</th>
		<th width ='16%'>Nama</th>
		<th width ='11%' >Jenis Kelamin</th>
		<th width ='22%' >Alamat</th>
		<th width ='14%' >Tanggal Periksa</th>
		<th width ='11%' >Phone</th>
		 <th width ='15%' >Aski</th>
	</tr>
</thead>

<tbody>
	 <?php 
	foreach ($tampil_c as $tampils){ ?>
	<tr>
		<td><?php echo ++$offset;?></td>
		<td><?php echo $tampils->jenis_layanan; ?></td>
		<td><?php echo $tampils->nama; ?></td>
		<td><?php echo $tampils->jenis_kelamin; ?></td>
		<td><?php echo $tampils->alamat; ?></td>
		<td><?php echo $tampils->tgl_periksa; ?></td>
		<td><?php echo $tampils->notel; ?></td>  
		<td style="text-align: center">
		

		  <?php } ?> 
</tbody>
<div class="container " role="main">
<div class="row" style="margin-bottom: 10px;">
<a href="<?php echo base_url()?>index.php/cetak_c/laptrx" ><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div> 	
 </table> 
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
<?php echo $pagination; ?> 
</body>
</html>