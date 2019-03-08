<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Admin</title>
<link href="nob.css" rel="stylesheet"/>
<style>
	body{
		background-color:#EEE;
		padding:0;
		margin:0;
	}
	.con{
		padding-left:6%;
		padding-right:6%;
		margin-top:5%;
	}
</style>

<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/nob.css" type="text/css">
<?php
 echo "<style>
    body{
        background-image:url(".base_url()."/img/bb.jpg);
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-size:100% 100%;
    }
 </style>";
 ?>
</head>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
<body>
	<nav class="menu">
		<span class="menu-item">Tanggal : 26/04/2018</span><a href="#" class="ancor">Log Out</a>
		<div style="clear:both;"></div>
	</nav>
	<div class="con">
    	<div class="main1 mnt-bet">
			<span class="title_"><strong>Antrian BPJS</strong></span>
            <div class="nomor"><center><span>0</span></center></div>
            <div class="tbl-nav"><center>
            	<button class="btn-bet" onclick="getAction(event,this)">Panggil antrian</button>
                <button class="btn-bet">Layani antrian</button>
                <button class="btn-bet">Batal dilayani</button>
                <button class="btn-bet">Selesai dilayani</button>
                </center>
            </div>
		</div>
        <div class="main2 mnt-bet">
			<span class="title_2"><strong>Antrian Umum</strong></span>
            <div class="nomor"><center><span>0</span></center></div>
            <div class="tbl-nav"><center>
            	<button class="btn-bet2" onclick="getAction(event,this)">Panggil antrian</button>
                <button class="btn-bet2">Layani antrian</button>
                <button class="btn-bet2">Batal dilayani</button>
                <button class="btn-bet2">Selesai dilayani</button>
                </center>
            </div>
		</div>
        <div style="clear:both;"></div>
    </div>
    <script>
    $(function(){realRequest();});
    
    function realRequest(){
            var nomor_antrian = $.ajax({
                url:<?php echo base_url("index.php/set/hitung1");?>,
                cache:false,
                type:"POST",
                data:{event:"lihat"},
                dataType:"html",
                success:function(param){
                    $(".main1 .nomor span").html(param);
                }
            });
            nomor_antrian.fail(function(j, text){
                alert("Request failed: "+text);
            });
            
            // Umum
            var nomor_antrian_umum = $.ajax({
                url:"set/hitung2.php",
                cache:false,
                type:"POST",
                data:{event:"lihat"},
                dataType:"html",
                success:function(param){
                    $(".main2 .nomor span").html(param);
                }
            });
            nomor_antrian_umum.fail(function(j, text){
                alert("Request failed: "+text);
            });
            
        }
    
    function getAction(e,v){
        var me = v.attributes["alt"].value;
        if(me == "umum"){
            var nomor_antrian = $.ajax({
                url:"set/tambah2.php",
                cache:false,
                type:"POST",
                data:{event:"tambah"},
                dataType:"html",
                success:function(param){
                    if(param == "0"){
                        alert("Maaf antrian sedang kosong...!!!");
                    }else{
                        realRequest();
                    }
                }
            });
            nomor_antrian.fail(function(j, text){
                alert("Request failed: "+text);
            });
        }else if(me == "bpjs"){
            var nomor_antrian = $.ajax({
                url:"set/tambah1.php",
                cache:false,
                type:"POST",
                data:{event:"tambah"},
                dataType:"html",
                success:function(param){
                    if(param == "0"){
                        alert("Maaf antrian sedang kosong...!!!");
                    }else{
                        realRequest();
                    }
                }
            });
            nomor_antrian.fail(function(j, text){
                alert("Request failed: "+text);
            });
        }else{
            alert("Tidal ada element yang terkonfigurasi..!!");
        }
    }

</script>
</body>
</html>
