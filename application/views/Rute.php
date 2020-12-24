<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Rute</h1>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <!-- Alert -->
  <?php if ($this->session->flashdata('flash')) { ?>
    <!-- Data berhasil ditambahkan -->
    <!-- <div class="alert alert-success" role="alert">
  <h6>Data admin <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?></h6>
</div> -->
  <?php } ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?= base_url('admin/rute/halaman_tambah_data'); ?>" class="btn btn-primary btn-sm ml-4"> Tambah Rute Baru</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Rute</th>
              <th>Waktu</th>
              <th colspan="2">
                <center>Aksi</center>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php $no = 1;
              foreach ($rute as $r) {
              ?>
                <td><?= $no++ ?></td>
                <td><?= $r->rute ?></td>
                <td><?= $r->jam ?></td>
                <td>
                  <center><?= anchor('admin/rute/halaman_edit_data/' . $r->id_rute, '<center><div class="btn btn-sm btn-primary"><i class="fas fa-edit">Edit Data</i></div></center>') ?>
                </td>
                <td>
                  <center>
                    <div data-toggle="modal" data-target="#hapus_data_<?= $r->id_rute ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash">Hapus Data</i></div>
                  </center>
                </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Hapus data modal -->
<?php
$no = 0;
foreach ($rute as $r) {
  $no++ ?>
  <div class="modal fade" id="hapus_data_<?= $r->id_rute ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <form action="<?php echo base_url('admin/rute/hapus_data/' . $r->id_rute); ?>" method="post">
            <input type="hidden" readonly value="<?= $r->id_rute ?>" name="id_rute" class="form-control">
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
<!-- Dikerjakan oleh Dodhy -->
<!-- Diedit oleh : ,pada tanggal -->