<div class="container-fluid">
	<h2><b>DATA PESANAN BARANG</b></h2>
	<br>
	<table class="table table-border table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Status Transaksi</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->id_invoice ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<?php if ($inv->status == 0){ ?>
				<td>Menunggu Bayar</td>
			<?php }else if ($inv->status == 1){ ?>
				<td>Proses</td>
			<?php }else{ ?>
				<td>Di Terima</td>
			<?php } ?>
			<td> <?php echo anchor('admin/invoice/detail/'.$inv->id_invoice, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>
	
	<?php endforeach; ?>
	
	</table>
</div>