<div class="container-fluid">
  <div class="row text-center">

    <?php foreach ($barang as $brg) : ?>

      <div class="card mt-3 ml-3 mb-3" style="width: 12rem;">
        <img class="card-img-top" src="<?php echo base_url().'/assets/img/produk/'.$brg->gambar ?>" alt="Card image">
          <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
          <span class="badge bg-light text-dark mb-3">Rp. <?php echo number_format($brg->harga,0,',','.') ?></span><br>
         <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang<?php echo $brg->id_barang ?>"><i class="fas fa-plus fa-sm"></i> Tambah Ke Keranjang</button>
          <?php echo anchor('dashboard/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-info">Detail</div>') ?>
          
        </div>
      </div>

      <!-- Modal -->
<div class="modal fade" id="tambah_barang<?php echo $brg->id_barang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
Areby Collection @2022

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Silahkan Input Produk</b></h5>
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

    <?php endforeach; ?>
  </div>
</div>