<div class="container-fluid">

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/contoh-slider.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/contoh-slider2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="row text-center">

    <?php foreach ($list_kategori as $brg) : ?>

      <div class="card ml-3 mt-3 mb-3" style="width: 12rem;">
        <img src="<?php echo base_url().'/assets/img/produk/'.$brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
           <span class="badge bg-light text-dark mb-3">Rp. <?php echo number_format($brg->harga,0,',','.') ?></span><br>
          <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang<?php echo $brg->id_barang ?>"><i class="fas fa-plus fa-sm"></i> Tambah Ke Keranjang</button>
          <?php echo anchor('dashboard/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-success">Detail</div>') ?>
          
        </div>
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

    <?php endforeach; ?>
  </div>
</div>