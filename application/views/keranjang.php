<div class="container-fluid">
	<h4><b>Keranjang Belanja</b></h4>
	<br>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Nomor</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Ukuran</th>
			<th>Harga</th>
			<th>Sub Total</th>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td align="center"><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td><?php echo $items['ukuran'] ?></td>
				<td align="right">Rp.<?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="right">Rp.<?php echo number_format($items['subtotal'], 0,',','.') ?></td>
			</tr>
			

		<?php endforeach; ?>

		<tr>
			<td colspan="5"></td>
			<td align="right">Rp.<?php echo number_format($this->cart->total(), )?></td>
		</tr>
	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('welcome') ?>"><div class="btn btn-sm btn-primary">Lanjut Belanja</div></a>
		<a href="<?php echo base_url('dashboard/pesanan') ?>"><div class="btn btn-sm btn-success">Checkout</div></a>
	</div>
</div>