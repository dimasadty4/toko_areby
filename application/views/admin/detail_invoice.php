<?php  
foreach ($pembayaran as $pmb) :
$path = $pmb->bukti_bayar;

endforeach;
?>

<div class="container-fluid">
	<h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id_invoice ?></div></h4>
	<div>
	<?php if($invoice->status != 2){ ?> 
		<form method="post" action="<?php echo base_url('admin/invoice/update/'.$invoice->id_invoice) ?>" enctype="multipart/form-data" >
		<input type="radio" name="status" <?php if ($invoice->status == 0) echo "checked"; ?> value="0">Menunggu Bayar
		<input type="radio" name="status" <?php if ($invoice->status == 1) echo "checked"; ?> value="1">Proses
		<button type="submit" class="btn btn-sm btn-primary mb-3">Update Status</button>
	</form>
<?php } ?>

	</div>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Barang</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga Satuan</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
		$total = 0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>

		<tr>
			<td><?php echo $psn->id_barang ?></td>
			<td><?php echo $psn->nama_barang ?></td>
			<td><?php echo $psn->jumlah ?></td>
			<td><?php echo number_format($psn->harga,0,',','.') ?></td>
			<td><?php echo number_format($subtotal,0,',','.') ?></td>
		</tr>
		
		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Total</td>
			<td align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>

	<a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary mb-3">Kembali</div></a>
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm"></i> Bukti Pembayaran</button>
</div>


<div id="myModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="modal-content" height="200" width="100" src="<?php echo base_url().'/bukti_tf/'.$path ?>">      </div>
    </div>
  </div>
</div>