<table class="table table-striped">

    <thead>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data
                    berhasil <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        <?php endif; ?>

        <tr>
            <a href="<?= base_url('admin/sopir/baru'); ?>" class="btn btn-success btn-sm"> Tambah Data Supir</a>
            <br>
            <br>
            <th scope="col">No</th>
            <th scope="col">Nama Supir</th>
            <th scope="col">Alamat </th>
            <th scope="col">Telepon </th>
            <th scope="col">Foto</th>
            <th colspan="2">
                <center>Aksi</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($supir as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nama_supir ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->telepon ?></td>
                <td>
                    <img src="<?= base_url('assets/foto-sopir/') . $u->foto ?>" width="70" height="70">
                </td>
                <td>
                    <center><?= anchor('admin/sopir/halaman_edit_supir/' . $u->id_supir, '<center><div class="btn btn-sm btn-primary"><i class="fas fa-edit">Edit Data</i></div></center>') ?>
                </td>
                <td>
                    <center>
                <td>
                    <center>
                        <?= anchor('admin/sopir/hapus/' . $u->id_supir, '<center><div class="btn btn-sm btn-danger"><i class="fas fa-trash">Hapus Data</i></div></center>') ?>
                    </center>
                </td>
                </center>
                </td>




            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<!--dikerjakan Angga>