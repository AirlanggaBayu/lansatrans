<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Admin</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a class="m-0 font-weight-bold text-primary" data-target="#tambah_data" data-toggle="modal" href="">Tambah Data</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Admin</th>
            <th>Nama Admin</th>
            <th colspan="2"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php $no = 1;
            foreach ($admin as $a) {
            ?>
            <td><?= $no++?></td>
            <td><?= $a->id_admin?></td>
            <td><?= $a->nama_admin?></td>
            <td><center><div data-toggle="modal" data-target="#edit_data_<?=$a->id_admin?>" class="btn btn-primary btn-sm"><i class="fas fa-edit">Edit Data</i></div></center></td>
            <td><center><div data-toggle="modal" data-target="#hapus_data_<?=$a->id_admin?>" class="btn btn-danger btn-sm"><i class="fas fa-trash">Hapus Data</i></div></center></td>
          </tr>
            <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Tambah data modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Admin</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url('admin/tambah_data'); ?>" method="post">
            <h6>Nama Admin</h6>
            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Admin Baru" name="nama_admin">
            <h6 class="mt-2">Password</h6>
            <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Password Disini" name="password">
            </div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" value="Tambah" class="btn btn-primary">
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Data Modal -->
  <?php 
    $no = 0;
    foreach($admin as $a){ $no++?>
  <div class="modal fade" id="edit_data_<?=$a->id_admin ?>" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah data admin</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url('admin/edit_data/'.$a->id_admin); ?>" method="post">
        <input type="text" readonly value="<?=$a->id_admin ?>" name="id_admin" class="form-control">
            <h6>Nama Admin</h6>
            <input type="text" class="form-control form-control-user" id="exampleInputEmail" 
            aria-describedby="emailHelp" placeholder="Masukkan Nama admin disini" name="nama_admin" value="<?=$a->nama_admin?>">
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" value="Tambah" class="btn btn-primary">
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
    <?php } ?>

    <!-- Hapus data modal -->
    <?php 
    $no = 0;
    foreach($admin as $a){ $no++?>
  <div class="modal fade" id="hapus_data_<?=$a->id_admin ?>" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah data admin</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <h6>Apakah anda <strong>Yakin</strong> ingin menghapus data ini?</h6>
        <form action="<?php echo base_url('admin/hapus_data/'.$a->id_admin); ?>" method="post">
          <input type="hidden" readonly value="<?=$a->id_admin ?>" name="id_admin" class="form-control">
        <div class="modal-footer ">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" value="Hapus" class="btn btn-danger">
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
    <?php } ?>