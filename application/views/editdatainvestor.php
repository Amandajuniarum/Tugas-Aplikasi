<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data Investor</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/updateinvestor" method="POST">
			<?php 
			foreach ($getIdDataInvestor as $tampilkan) { ?>
			<input type="hidden" name="id_investor" value="<?php echo $tampilkan->id_investor ?>">
			<input class="form-control input-lg" type="text" placeholder="Nama" name="nama" value="<?php echo $tampilkan->nama ?>">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Alamat" name="alamat" value="<?php echo $tampilkan->alamat ?>">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Keterangan" name="keterangan" value="<?php echo $tampilkan->keterangan ?>">
			<br>
			<?php }
			?>
		</div>
	</div>
	<div class="">
		<button class="btn btn-primary btn-md">Tambah Data</button>
	</div>
		</form>