<?php foreach ($tb_pelanggan as $tbp): 
$nama_pelanggan = $tbp->nama_pelanggan;
$alamat_pelanggan = $tbp->alamat_pelanggan;
$no_hp = $tbp->no_hp;
$email = $tbp->email;
endforeach;
?>

	<table class="table table-bordered">
		<tr>
			<td>Nama Lengkap Anda</td>
			<td><?php echo $nama_pelanggan ?></td>
		</tr>
		
		<tr>
			<td>Alamat Lengkap Anda</td>
			<td><?php echo $alamat_pelanggan ?></td>
		</tr>
		
		<tr>
			<td>Nomor Telepon</td>
			<td><?php echo $no_hp ?></td>
		</tr>
		
		<tr>
			<td>Email Anda</td>
			<td><?php echo $email ?></td>
		</tr>
</table>

<td><button class="btn btn-sm btn-primary ml-3" data-toggle="modal" data-target="#update_profil"><i class="fas fa-edit fa-sm"></i> Update Profil</button><a href="<?php echo base_url('welcome') ?>"><div class="btn btn-sm btn-danger ml-1">Kembali</div></a>

<!-- Modal -->
<div class="modal fade" id="update_profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
Areby Collection @2022

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Data Pribadi Anda</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('profil_pelanggan/edit_profil') ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Lengkap</label>
        		<input type="text" name="nama_pelanggan" value="<?php echo $nama_pelanggan ?>" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Alamat Lengkap</label>
        		<input type="text" name="alamat_pelanggan" value="<?php echo $alamat_pelanggan ?>" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Nomor Telepon</label>
        		<input type="text" name="no_hp" value="<?php echo $no_hp ?>" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Email</label>
        		<input type="text" name="email" value="<?php echo $email ?>" class="form-control" required>
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