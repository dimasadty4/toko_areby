<div class="container-fluid">
	<h2><b>DATA ADMIN</b></h2>
	<br>
	
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_admin"><i class="fas fa-plus fa-sm"></i> Tambah Data Admin</button>
	<table class="table table-border table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Role</th>
			<th>Aksi</th>
		</tr>

		<?php 
		$no=1;
		foreach ($tb_user as $user): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $user->nama ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->password ?></td>
			<td><?php echo $user->role_id ?></td>
			<td><button class="btn btn-sm btn-primary mb-3 fa fa-edit" data-toggle="modal" data-target="#edit_admin<?php echo $user->id ?>"><i class="fas fa-plus fa-sm"></i> Edit</button>
				<?php echo anchor('admin/data_admin/delete/' .$user->id, '<div class="btn btn-danger btn-sm mb-3"><i class="fa fa-trash"></i></div>') ?>
				</td>
		</tr>
	
		<!-- Modal -->
<div class="modal fade" id="edit_admin<?php echo $user->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
Areby Collection @2022

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_admin/edit_admin/'.$user->id; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Admin</label>
				<input type="text" name="nama" class="form-control " required>
        	</div>

        	<div class="form-group">
        		<label>Username</label>
        		<input type="text" name="username" class="form-control" value="<?php echo $user->username ?>" readonly>
        	</div>

        	<div class="form-group">
        		<label>Password</label>
        		<input type="password" name="password" class="form-control" required>
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

	<?php endforeach; ?>
	
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
Areby Collection @2022

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_admin/tambah_admin'; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Admin</label>
        		<input type="text" name="nama" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Username</label>
        		<input type="text" name="username" class="form-control" required>
        	</div>

        	<div class="form-group">
        		<label>Password</label>
        		<input type="password" name="password" class="form-control" required>
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