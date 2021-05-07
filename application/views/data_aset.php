<div class="">
	<a href="<?php echo base_url() ?>index.php/Welcome/tambahdataaset"><button class="btn btn-primary">Klik di bawah ini untuk menambah data aset</button></a>
</div>
<br>
<br>
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Aset</h3>
</div>
<div class="box-body no-padding">
	<table class="table table-condensed">
		<tr>
			<th>ID Aset</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Kondisi</th>
			<th>Keterangan</th>
			<th>Aksi</th>
	</tr>
	<?php
		foreach ($data_aset as $tampilkan) {
			echo "<tr>";
				echo "<td>$tampilkan->id_aset</td>";
				echo "<td>$tampilkan->nama_barang</td>";
				echo "<td>$tampilkan->jumlah</td>";
				echo "<td>$tampilkan->kondisi</td>";
				echo "<td>$tampilkan->keterangan</td>";
				echo "<td><a href='editdataaset/$tampilkan->id_aset'><button class='btn btn-primary btn-xs'>Edit</button></a><button class='btn btn-danger btn-xs' type='button' onClick='hapus($tampilkan->id_aset)'>Hapus</button></td>";
			echo "</tr>";
		}
	?>
</table>
</div>
</div>

<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span></button>
            <h4 class="modal-title">Peringatan</h4>
        </div>
        <form action="<?php echo base_url() ?>index.php/Welcome/hapusdataaset" method="POST" id="fromHapus">
            <input type="hidden" name="id_aset" value="">
            <div class="modal-body">
                <p>Apakah anda ingin menghapus data ini</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-outline">Iya</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- SCRIPT MODAL -->
<script type="text/javascript">
    function hapus(id) {
        $('#fromHapus')[0].reset();
        $.ajax({
            url :"<?php echo base_url('index.php/Welcome/getIdAset') ?>/"+id,
            type:"GET",
            dataType:"JSON",
            success: function(data){
                $('[name="id_aset"]').val(data.id_aset);
                $('#modal-danger').modal('show');
            }
        });
    }
</script>