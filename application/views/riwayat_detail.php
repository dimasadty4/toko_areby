<div class="container-fluid">
<?php foreach ($invoice as $inv): 
$status = $inv->status;
$id_invoice = $inv->id_invoice;
endforeach;
?>
	<table class="table table-bordered table-hover table-striped"><?php $status; ?>
		<tr>
			<th>Id Barang</th>
			<th>Nama Produk</th>
			<th>Ukuran</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
		$total = 0;
		foreach ($tb_pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>

		<tr>
			<td><?php echo $psn->id_barang ?></td>
			<td><?php echo $psn->nama_barang ?></td>
			<td><?php echo $psn->ukuran ?></td>
			<td><?php echo $psn->jumlah ?></td>
			<td><?php echo number_format($psn->harga,0,',','.') ?></td>
			<td><?php echo number_format($subtotal,0,',','.') ?></td>
		</tr>
		
		<?php endforeach; ?>

		<tr>
			<td colspan="5" align="right">Total</td>
			<td align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>

	<a href="<?php echo base_url('dashboard/riwayat_pesanan') ?>"><div class="btn btn-sm btn-primary mb-3">Kembali</div></a>

	<?php if($status == 0) { ?>

	<a href="<?php echo base_url('pembayaran/index/'.$id_invoice) ?>"><div class="btn btn-sm btn-success mb-3">Bayar</div></a>

	<?php } ?>

	<?php if($status == 1) { ?>

	<a href="<?= base_url('dashboard/cetak_invoice/' .$id_invoice) ?>" class="btn btn-sm btn-danger mb-3"><i class="fa fa-print"> Cetak Invoice</i></a>
	<a href="<?php echo base_url('dashboard/update/'.$id_invoice) ?>"><div class="btn btn-sm btn-success mb-3">Di Terima</div></a>
	<?php  } ?>

	<?php if($status == 2) { ?>

	<a href="<?= base_url('dashboard/cetak_invoice/' .$id_invoice) ?>" class="btn btn-sm btn-danger mb-3"><i class="fa fa-print"> Cetak Invoice</i></a>
		<?php  } ?>
	
</div>


<div id="myModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="modal-content" height="200" width="100" src="<?php echo base_url().'/assets/img/produk/'.$invoice->bukti_tf ?>">      </div>
    </div>
  </div>
</div>