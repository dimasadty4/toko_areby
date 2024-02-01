		<?php 
		$total = 0;
		foreach ($pesanan as $psn) :
			$id_invoice = $psn->id_invoice;
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		endforeach;
		?>

	<div class="card">
		<div class="card-header alert alert-primary">Informasi Pembayaran 
		</div>

		<div class="card-body alert-danger">
			<p class="text-primary mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Di Bawah Ini :</p> 
			<ul class+"list-group list-group-flush">
				<li class="list-group-item text-primary">Bank Mandiri/Areby Collection/0123456789</li>
				<li class="list-group-item text-primary">Bank BRI/Areby Collection/0987654321</li>
				<li class="list-group-item text-primary">Dana/Areby Collection/085793497941</li>
			</ul>
				</div>

				<form method="post" enctype="multipart/form-data" action="<?php echo base_url('pembayaran/upload') ?>" class="user">
				<div class="form-group">
      		<label>Nama Rekening Bank</label>
				<input type="text"  name="nama_pembayar" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="hidden" value="<?php echo $id_invoice ?>" name="id_invoice" class="form-control" required>
			</div>

			<div class="form-group">
      		<label>Nama Bank</label>
				<input type="text" name="nama_bank" class="form-control" required>
			</div>

			<div class="form-group">
      		<label>Jumlah Bayar</label>
				<input type="text" value="<?php echo $total ?>" name="jumlah_bayar" class="form-control" readonly>
			
			</div>

			<div class="form-group">
      		<label>Bukti Pembayaran</label>
				<input type="file"  name="bukti_tf" class="form-control" required>
			</div>
			
			<div align="right">
				<input type="submit" name="submit">
			</div>
		</form>
		</div>
	</div>
</div>
