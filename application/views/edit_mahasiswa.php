<div align="center">
	<h1 class="display-3" align="center">Data Mahasiswa</h1>
	<form method="post" action="<?php echo base_url('Mahasiswa/EditMahasiswa') ?>">
	<?php foreach($mhs as $m) { ?>
	<div class="form-group">
		<label>NIM</label>
		<input type="text" name="nim" class="form-control col-sm-2" readonly="" value="<?php echo $m->no_induk ?>">
	</div>
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input  type="text" name="nama" class="form-control col-sm-2" placeholder="Nama Mahasiswa" value="<?php echo $m->nama ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control col-sm-2" name="alamat" placeholder="Alamat Mahasiswa"><?php echo $m->alamat ?></textarea>
	</div>
	<div class="form-group">
		<label>No.Telp</label>
		<input type="text" name="tlp" class="form-control col-sm-2" placeholder="08xxxxxx" value="<?php echo $m->no_telp ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control col-sm-2" placeholder="example@kampus.com" value="<?php echo $m->email ?>">
	</div>
	<button type="submit" class="btn btn-warning col-sm-2" name="submit">Edit Mahasiswa</button>
	<?php } ?>
	</form>
</div>	