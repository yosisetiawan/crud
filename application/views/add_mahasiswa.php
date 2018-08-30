<div align="center">
	<h1 class="display-3" align="center">Mahasiswa Baru</h1>
	<form method="post" action="<?php echo base_url('Mahasiswa/MahasiswaBaru') ?>">
	<div class="form-group">
		<label>NIM</label>
		<input type="text" name="nim" class="form-control col-sm-2" placeholder="NIM Baru Mahasiswa" value="<?php echo $auto ?>" readonly="">
	</div>
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" name="nama" class="form-control col-sm-2" placeholder="Nama Mahasiswa">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control col-sm-2" name="alamat" placeholder="Alamat Mahasiswa"></textarea>
	</div>
	<div class="form-group">
		<label>No.Telp</label>
		<input type="text" name="tlp" class="form-control col-sm-2" placeholder="08xxxxxx">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control col-sm-2" placeholder="example@kampus.com">
	</div>
	<button type="submit" class="btn btn-primary col-sm-2" name="submit">Tambah Mahasiswa</button>
	</form>
</div>	