<!DOCTYPE html>
<html>
<head>
	<title>System Antrian Online</title>
	<base href="<?php echo base_url();?>"></base>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrapValidator.min.js">
    
	<script type="text/javascript" src="assets/js/jquery-1.13.3.min.js"></script>	
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/bootstrapValidator.min.js"></script>

  <script type="text/javascript">
      window.history.forward();
      function noBack() { window.history.forward(); }
  </script>

<style type="text/css">
      .navbar-inverse{
    background-color:  #66ff66;
       }
    </style>
</head>
<body onload="noBack();"onpageshow="if (event.persisted) noBack();" onunload="">
<div class="row">
<nav class="navbar navbar-inverse navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
<img src="<?php echo base_url()?>assets/gambar/Logo-puskesmas.png" width="43" height="50" />
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <li> <?php echo anchor('laporan_c','Data Antrian');?></li>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" ; ?>Antrian Online</a>
        </div>
        </ul>
         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
      <li class="icon-switch2"><a href="<?php echo base_url(); ?>"></a></li>
            <li class="icon-switch2"><a href="<?php echo base_url("index.php/tampill_c"); ?>">Daftar Antrian Pasien</a></li>
      <li class="icon-switch2"><a href="<?php echo base_url(""); ?>"></a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('Login/logout'); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar');"><i class="icon-switch2"></i> Logout</a></li>
      </ul>
      </div>
  </nav>
</div>
    