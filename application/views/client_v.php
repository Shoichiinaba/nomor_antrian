<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<style>
	body{
		background-color:rgba(208,207,206,0.4);
		padding-left:3%;
		padding-right:3%;
		padding-top:5%;
	}
</style>
<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/pay.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
 </style>";
 ?>
<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/nob.css" type="text/css">
<?php echo form_open('form_c');?>
</head>


<body>
	<div id="container">
		<div class="main1">
			<span class="title_"><strong>Antrian BPJS</strong></span>
			<div class="nomor"><center><span>1</span></center></div>
			<div class="tombol">
				<center><button class="btn-nav1">Ambil antrian</button></center>
			</div>
			<div class="info">*antrian peserta 0 orang*</div>
		</div>
		<div class="main2">
			<span class="title_2"><strong>Antrian Umum</strong></span>
			<div class="nomor"><center><span>1</span></center></div>
			<div class="tombol">
				<center><button class="btn-nav2">Ambil antrian</button></center>
			</div>
			<div class="info">*antrian peserta 0 orang*</div>
		</div>
		<div style="clear:both;"></div>
	</div>
</body>
</html>