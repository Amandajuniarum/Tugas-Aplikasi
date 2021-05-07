<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data Investor</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/simpanInvestor" method="POST">
			<input class="form-control input-lg" type="text" placeholder="Nama" name="nama">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Alamat" name="alamat">
			<br>
			<input class="form-control input-lg" type="text" placeholder="Keterangan" name="keterangan">
			<br>
		</div>
	</div>
	<div class="">
		<button class="btn btn-primary btn-md">Tambah Data</button>
	</div>
		</form>