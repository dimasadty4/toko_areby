<div class="container-fluid">
	
	<div class="card">
		<h5 class="card-header"><b>Detail Produk</b></h5>
		<div class="card-body">

			<?php foreach($barang as $brg): ?>
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo base_url().'/assets/img/produk/'.$brg->gambar ?>" class="card-img-top">
				</div>
				<div class="col-md-8">
					<table class="table">
						<tr>
							<td>Nama Produk</td>
							<td><strong><?php echo $brg->nama_barang ?></strong></td>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td><strong><?php echo $brg->keterangan ?></strong></td>
						</tr>
						<tr>
							<td>Stok</td>
							<td><strong><?php echo $brg->stok ?></strong></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($brg->harga,0,',','.') ?></div></strong></td>
						</tr>
					</table>
					<br>
					<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang<?php echo $brg->id_barang ?>"><i class="fas fa-plus fa-sm"></i> Tambah Ke Keranjang</button>
					<?php echo anchor('welcome','<div class="btn btn-sm btn-danger mb-3">Kembali</div>') ?>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="tambah_barang<?php echo $brg->id_barang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				Areby Collection @2022

				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Silahkan Input Produk</h5>
				        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <div class="modal-body">
				        <form action="<?php echo base_url().'dashboard/tambah_ke_keranjang/'.$brg->id_barang ?>" method="post" enctype="multipart/form-data"><img height="500" width="100" src="<?php echo base_url().'/assets/img/produk/'.$brg->gambar ?>" class="card-img-top" alt="...">

				          <div class="form-group">
				            <label><?php echo $brg->nama_barang ?></label>
				          </div>
				          <div class="form-group">
				            <label>Jumlah</label>
				            <input type="text" name="jumlah_brg" class="form-control" required>
				          </div>

				          <div class="form-group">
				            <label>Ukuran</label>
				            <br>
				            <select class="form-control" name="ukuran">
				              <option>S</option>
				              <option>M</option>
				              <option>L</option>
				              <option>XL</option>
				              <option>XXL</option>
				            </select>
				          </div>
				      </div>
				      <div class="modal-footer">
				        <span class="button" data-dismiss="modal" aria-label="Close">Batalkan</span>
				        <button type="submit" class="btn btn-primary">Tambah Ke Keranjang</button>
				      </div>

				  </form>
				    </div>
				  </div>
				</div>
				
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>