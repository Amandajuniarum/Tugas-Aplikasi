<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data User</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/updateuser" method="POST">
			<?php 
			foreach ($getIdDataUser as $tampilkan) { ?>
			<input class="form-control input-lg" type="text" placeholder="Nama" name="nama" value="<?php echo $tampilkan->nama_lengkap ?>">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Username" name="username" value="<?php echo $tampilkan->username ?>">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Password" name="password" value="<?php echo $tampilkan->password ?>">
			<br>
			<?php }
			?>
		</div>
	</div>
	<div class="">
		<button class="btn btn-primary btn-md">Tambah Data</button>
	</div>
		</form>