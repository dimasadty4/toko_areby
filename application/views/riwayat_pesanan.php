<div class="container-fluid">
	<h2><b>PESANAN BARANG</b></h2>
	<br>
	<table class="table table-border table-hover table-striped" id="tabel-data">
		<thead>
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>Status Transaksi</th>
			<th>Aksi</th>
		</tr>
		</thead>

		<?php foreach ($invoice as $inv): ?>
		<tbody>
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
				<td>Selesai</td>
			<?php } ?>
			<td><?php echo anchor('dashboard/riwayat_detail/'.$inv->id_invoice, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>
		</tbody>

	
	<?php endforeach; ?>
	
	</table>
		<a href="<?php echo base_url('welcome') ?>"><div class="btn btn-sm btn-danger mb-3">Kembali</div></a>
</div>