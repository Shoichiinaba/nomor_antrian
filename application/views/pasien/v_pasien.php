<?php
	if(empty($_GET['action']))
	{
?>
<div class="quoteOfTipe">
	<div class="mosAdm"><img src="mos-css/img/anggota.png" width="56" height="53"/></div>
	<b>Form Data Anggota Polindes</b><br>
	<i style="color: #5b5b5b;">&quot;Polindes Palesangger&quot;</i>
</div>
<div id="smallRight1">
	<h3><img src="mos-css/img/posting.png" width="16" height="16" /> Masukan Data Anggota Polindes</h3>	
	<form name="form1" method="post" action="php/proses.php">
		<table width="95%" >
			<div class="form-group">
			<label >ID</label>
			<input type="text" class="form-control" placeholder="ID" required="" name="ID">
			</div>

			<div class="form-group">
				<tr align='left'>
					<label>Jenis Layanan </label>
					<td><select class="form-control" name="jenis_layanan">
		<option value="">Pilih Layanan</option>
		<option value="BPJS">BPJS</option>
		<option value="UMUM">UMUM</option>
	      </select></td></tr>
			</div>
			</tr>
			<tr>
				 <td><b>Nama Pasien</b></td>
				 <td><input name="data[]" type="text"  size="50" required placeholder="Nama Pasien"/></td>
			</tr>
				<div class="form-group">
				<tr align='left'>
					<label>Jenis Kelamin </label>
					<td><select class="form-control" name="jenis_kelamin
						<option value="">Pilih</option>
						<option value="Laki-Laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
	      		</select></td></tr>
			</div>
			</tr>
			<div class="form-group">
					<label >Alamat</label>
					<input type="text" class="form-control" placeholder="Alamat" required="" name="alamat
			</div>
			<tr>
				<td align="left"><b>Tanggal Periksad>
				<td><input name="data[]" type="date" size="30" required=""/></td>
			</tr> 
			<tr>  
				<td><b>No.Telp</b></td>
				<td><input name="data[]" type="text" size="30" required="" placeholder="Nomor Telp" maxlength="12" onKeyPress="return numbersonly(this,event)"/></td>
			</tr>
			
		</table>
	</form>
	<br>
	<table border="1" width="100%" class="data">
		<th class="data">NO</th>
		<th class="data">DUSUN</th>
		<th class="data">NAMA ANGGOTA</th>
		<th class="data">TETALA</th>
		<th class="data">ALAMAT</th>
		<th class="data">NO.TELP</th>
		<th class="data">NAMA BAYI</th>
		<th class="data">NAMA AYAH</th>
		<th class="data">AKSI</th>
		<?php
			$sql_anggota = mysql_query("SELECT * FROM tbl_anggota,tbl_dusun WHERE tbl_anggota.id_dusun = tbl_dusun.id_dusun ORDER BY id_anggota DESC");
			$no=0;
			while($data_anggota = mysql_fetch_array($sql_anggota))
			{
				$no++;
		?>
		<tr class="data">
			<td align="center" class="data"><?php echo $no?></td>
			<td class="data"><?php echo $data_anggota['nama_dusun']?></td>
			<td class="data"><?php echo $data_anggota['nama_anggota']?></td>
			<td class="data"><?php echo $data_anggota['tempat_lahir'].", ".$data_anggota['tgl_lahir']?></td>
			<td class="data"><?php echo $data_anggota['alamat']?></td>
			<td class="data"><?php echo $data_anggota['notelp']?></td>
			<td class="data"><?php echo $data_anggota['nama_bayi']?></td>
			<td class="data"><?php echo $data_anggota['nama_ayah']?></td>
			<td align="center" class="data">
				<a href="?page=anggota&action=edit&id=<?php echo $data_anggota['id_anggota']?>"><img src="icon/update.png">
				<a href="php/hapus-data.php?id_data=<?php echo $data_anggota['id_anggota']?>&x=id_anggota&y=tbl_anggota&z=?page=anggota" onclick="return confirm('Apakah anda yakin akan menghapus data yang dipilih ?');"><img src="icon/hapus.png"></a>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
</div>
<?php
	}
	else
	{
		$id_anggota = $_GET['id'];
		$sql_anggota = mysql_query("SELECT * FROM tbl_anggota WHERE id_anggota='$id_anggota'");
		$data_anggota = mysql_fetch_array($sql_anggota);
?>	
<div class="quoteOfTipe">
	<div class="mosAdm"><img src="mos-css/img/anggota.png" width="56" height="53"/></div>
	<b>Form Edit Data Anggota Polindes</b><br>
	<i style="color: #5b5b5b;">&quot;Polindes Palesangger&quot;</i>
</div>
<div id="smallRight1">
	<h3><img src="mos-css/img/posting.png" width="16" height="16" /> Masukan Perubahan Data Anggota Polindes</h3>	
	<form name="form1" method="post" action="php/proses.php">
		<table width="95%" >
			<tr>
				<td><b>Dusun</b></td>
				<td>
					<select name="data[]" required="">
						<option value="" selected="selected">Pilih Dusun</option>
						<?php
							$sql_dusun = mysql_query("SELECT * FROM tbl_dusun ORDER BY id_dusun DESC");
							while($data_dusun = mysql_fetch_array($sql_dusun))
							{
						?>
						<option value="<?php echo $data_dusun['id_dusun']?>" <?php if($data_anggota['id_dusun']==$data_dusun['id_dusun']){?> selected <?php } ?>><?php echo $data_dusun['nama_dusun']?></option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>   
			<tr>
				 <td><b>Nama Anggota</b></td>
				 <td><input value="<?php echo $data_anggota['nama_anggota']?>" name="data[]" type="text"  size="50" required placeholder="Nama Anggota"/></td>
			</tr>
			<tr>
				  <td><b>Tempat Lahir</b></td>
				 <td><input value="<?php echo $data_anggota['tempat_lahir']?>" name="data[]" type="text" size="30" required placeholder="Tempat Lahir" onKeyPress="return namesonly(this, event)"/></td>
			</tr>
			<tr>
				<td align="left"><b>Tanggal Lahir</b></td>
				<td><input value="<?php echo $data_anggota['tgl_lahir']?>" name="data[]" type="date" size="30" required=""/></td>
			</tr> 
			<tr>
				<td><b>Alamat</b></td>
				<td><textarea name="data[]" rows="3" cols="20" arequired="" placeholder="Alamat Anggota"/><?php echo $data_anggota['alamat']?></textarea></td>
			</tr>
			<tr>  
				<td><b>No.Telp</b></td>
				<td><input value="<?php echo $data_anggota['notelp']?>" name="data[]" type="text" size="30" required="" placeholder="Nomor Telp" maxlength="12" onKeyPress="return numbersonly(this,event)"/></td>
			</tr>
			<tr>  
				<td><b>Nama Bayi</b></td>
				<td><input value="<?php echo $data_anggota['nama_bayi']?>" name="data[]" type="text" size="50" required="" placeholder="Nama Bayi" onKeyPress="return namesonly(this,event)"/></td>
			</tr> 
			<tr>  
				<td><b>Nama Ayah</b></td>
				<td><input value="<?php echo $data_anggota['nama_ayah']?>" name="data[]" type="text" size="50" required placeholder="Nama Ayah " onKeyPress="return namesonly(this, event)"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="nama_tabel" value="tbl_anggota">
					<input type="hidden" name="id_data" value="<?php echo $id_anggota?>">
					<input type="hidden" name="halaman" value="?page=anggota">
					<input type="submit" class="button" value="Simpan Perubahan" name="btn-proses">
					<a href="?page=anggota"><input type="button" class="button" value="Batal"></a>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php
	}
?>