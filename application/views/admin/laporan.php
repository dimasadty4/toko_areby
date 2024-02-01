<div class="container-fluid">
	<h2><b>LAPORAN PESANAN</b></h2>
	<br>

	<table class="table table-border table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Tanggal Bayar</th>
			<th>Jumlah Bayar</th>
		</tr>
	 
	<?php foreach ($invoice as $lap): ?>

    <tr>
        <td><?php echo $lap->id_invoice; ?></td>
        <td><?php echo $lap->nama; ?></td>
        <td><?php echo $lap->tgl_bayar; ?></td>
        <td><?php echo $lap->jumlah_bayar; ?></td> 
    </tr>

	<?php endforeach;  ?>

	<form method="post" action="<?php echo base_url('admin/testparameter/coba') ?>" class="user">

	<div class="form-row col-md-6">
		<div class="form-group">
		<label>Pilih Tanggal Awal</label>
		<input type="text" name="tgl_awal" class="form-control datepicker" required>
	</div>

	<div class="form-row">
		<div class="form-group ml-3">
		<label>Pilih Tanggal Akhir</label>
		<input type="text" name="tgl_akhir" class="form-control datepicker" required>
	</div>
	
	<div class="form-row">
		<div class="form-group ml-3 mt-2">
		<label> </label>
		<input type="submit" name="submit" class="form-control">
	</div>

	</form>

	<td> <?php echo anchor('admin/laporan/cetak_laporan/'.$lap->id_invoice, '<i class="bi bi-filetype-pdf btn btn-sm btn-danger"> Cetak Data Pesanan</i>') ?></td>
	
	</table>
</div>