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

            <br>
            <br>
            <th scope="col">No</th>
            <th scope="col">Pengirim </th>
            <th scope="col">Kritik dan Saran </th>
            <th scope="col">Tanggal terima </th>

            <th colspan="2">
                <center>Aksi</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($saran as $b) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b->Pengirim ?></td>
                <td><?php echo $b->saran ?></td>
                <td><?php echo $b->tgl_diterima ?></td>

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