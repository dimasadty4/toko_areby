<?php foreach ($tb_pelanggan as $tbp): 
$nama_pelanggan = $tbp->nama_pelanggan;
$alamat_pelanggan = $tbp->alamat_pelanggan;
$no_hp = $tbp->no_hp;
$email = $tbp->email;
endforeach;
?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-8">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()){
					foreach ($keranjang as $item){
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "<h4 class='btn btn-sm btn-success'>Total Belanja : Rp.".number_format($grand_total,00,',','.');
				?>
			<br>

			<h3>Input Alamat Pengiriman dan Metode Pembayaran</h3>
			<br>
			<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>" enctype="multipart/form-data" >
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" value="<?php echo $nama_pelanggan ?>" name="nama" class="form-control" readonly>
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" value="<?php echo $alamat_pelanggan ?>" name="alamat"  class="form-control" readonly>
				</div>

				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" value="<?php echo $no_hp ?>" name="no_hp" class="form-control" readonly>
				</div>

				<div class="form-group">
					<label>Metode Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>JNT</option>
						<option>ID Express</option>
						<option>Anter Aja</option>
						<option>Grab</option>
						<option>Gojek</option>
					</select>
				</div>

				<a href="<?php echo base_url('dashboard/detail_keranjang') ?>"><div class="btn btn-sm btn-danger mb-3">Kembali</div></a>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Buat Pesan</button>
				
			</form>

			<?php 
			} else{
				echo "<h5 class='btn btn-sm btn-danger'>Tidak ada barang dalam Keranjang anda";
			}
			?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>