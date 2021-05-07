<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data User</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/simpanUser" method="POST">
			<input class="form-control input-lg" type="text" placeholder="Nama" name="nama_lengkap">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Username" name="username">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Password" name="password">
			<br>
		</div>
	</div>
	<div class="">
		<button class="btn btn-primary btn-md">Tambah Data</button>
	</div>
		</form>