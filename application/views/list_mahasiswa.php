<div class="container" role="main">
	<div align="center">
		<h1 class="display-3" align="center">List Mahasiswa</h1>
		<a href="<?php echo base_url('Mahasiswa/MahasiswaBaru') ?>" class="btn btn-primary btn-sm">Tambah Mahasiswa</a>
	</div>
	<br>
	<?php
		if($this->session->flashdata == "simpan")
		{
			echo '<div class="alert alert-success" role="alert">
 				 $this->session->flashdata()
				</div>';
		}else if($this->session->flashdata == "edit")
		{
			echo '<div class="alert alert-warning" role="alert">
 				 $this->session->flashdata()
				</div>';
		}else if($this->session->flashdata == "hapus")
		{
			echo '<div class="alert alert-danger" role="alert">
 				 $this->session->flashdata()
				</div>';
		}
	?>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">NIM</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">No.Telp</th>
				<th scope="col">Email</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($mhs as $m) {
			?>
			<tr>
				<th scope="col"><?php echo $m->no_induk ?></th>
				<td><?php echo $m->nama ?></td>
				<td><?php echo $m->alamat ?></td>
				<td><?php echo $m->no_telp ?></td>
				<td><?php echo $m->email ?></td>
				<td>
					<a href="<?php echo base_url('Mahasiswa/EditMahasiswa/'.$m->no_induk) ?>" class="btn btn-warning btn-md">Edit</a>
					<a href="<?php echo base_url('Mahasiswa/HapusMahasiswa/'.$m->no_induk) ?>" class="btn btn-danger btn-md">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>