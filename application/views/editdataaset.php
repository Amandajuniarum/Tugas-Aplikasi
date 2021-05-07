<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data Aset</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/updateaset" method="POST">
			<?php 
			foreach ($getIdDataAset as $tampilkan) { ?>
				<input type="hidden" name="id_aset" value="<?php echo $tampilkan->id_aset ?>">
				<input class="form-control input-lg" type="text" placeholder="Nama Barang" name="nama_barang" value="<?php echo $tampilkan->nama_barang ?>">
				<br>
				<input class="form-control input-lg" type="text" placeholder="Jumlah" name="jumlah" value="<?php echo $tampilkan->jumlah ?>">
				<br>
				<input class="form-control input-lg" type="text" placeholder="Kondisi" name="kondisi" value="<?php echo $tampilkan->kondisi ?>">
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