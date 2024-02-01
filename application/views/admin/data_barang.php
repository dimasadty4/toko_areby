<div class="container-fluid">
	<h2><b>DATA BARANG</b></h2>
	<br>

	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

	<table class="table table-bordered">
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Action</th>
		</tr>

		<?php
		foreach($barang as $brg) : ?>

		<tr>
			<td><?php echo $brg->id_barang ?></td>
			<td><?php echo $brg->nama_barang ?></td>
			<td><?php echo $brg->keterangan ?></td>
			<td><?php echo str_replace('_', ' ', $brg->kategori) ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stok ?></td>
			<td><?php echo anchor('admin/data_barang/preview_barang/'.$brg->id_barang, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_barang/delete/' .$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>

			<?php endforeach; ?>
	
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
Areby Collection @2022

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Input Produk</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_barang" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<br>
        		<select class="form-control" name="kategori">
        			<option class="pakaian_anak">Pakaian Anak</option>
        			<option>Pakaian Dewasa</option>
        			<option>Busana Muslim</option>
        			<option>Jersey</option>
        		</select>
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label><br>
        		<input type="file" name="gambar" class="form-control" required>
        	</div>

      </div>
      <div class="modal-footer">
        <span class="button" data-dismiss="modal" aria-label="Close">Cancel</span>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

  </form>
    </div>
  </div>
</div>