<!DOCTYPE html>
<html>
<head>


</head>
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
<body>
    <div class="container " role="main">

    <div class="row" style="margin-top:  80px;">
</div>
</div>
<div class="row">
     <div class="container ">
<div class=" col-lg-push-3 col-lg-6">
    <div id="form-center">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Silahkan Masukan Data Diri Anda</h3>
</div>
<div class="panel-body">
<form method="post" action="<?php echo base_url()?>index.php/keluhan/insert">
<div class="form-group">

<form class="form-horizontal" action="" method="post">

    <div class="form-group">
        <label>ID</label>
            <input type="text" name="ID" class="form-control">
    </div>
    <div class="form-group">
        <label>Jenis Layanan</label>
            <select name="jenis_layanan" class="form-control">
                <option></option>
                <option value="BPJS">BPJS</option>
                <option value="UMUM">UMUM</option>
            </select>
    </div>
    <div class="form-group">
        <label>Nama</label>
            <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option></option>
                <option value="Laki laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
    </div>
    <div id="form-left">

     <div class="form-group">
            <label>Tanggal Periksa</label>
            <input type="date" class="form-control" name="tgl_periksa">
    </div>
    <div class="form-group">
        <label>Phone</label>
            <input type="text" name="notel" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <a href="<?php echo base_url("")?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button></a>
        <a href="<?php echo base_url("")?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left "></i> kembali</button></a>
        
</form>
</div>
</div>
</div>
<hr>
</div>
                    </div>
                    <!-- /footer -->
                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page co


</body>
</html>














