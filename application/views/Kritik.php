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
                <td><?php echo $b->pengirim ?></td>

                <td><?php echo $b->tgl_diterima ?></td>

                <td>
                    <a href="<?= base_url('admin/admin/detail_saran/' . $b->id_saran) ?>" class="btn btn-sm btn-success"><i class="fas fa-fw fa-eye"></i></a>
                    <a href="<?= base_url('admin/admin/hapus_saran/' . $b->id_saran) ?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a>
                </td>



            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<!--dikerjakan Angga>