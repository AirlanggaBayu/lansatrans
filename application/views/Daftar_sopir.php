<table class="table table-striped">

    <thead>


        <tr>
            <a href="<?= base_url('admin/sopir/baru'); ?>" class="btn btn-success btn-sm"> Tambah Data Supir</a>
            <br>
            <br>
            <th scope="col">No</th>
            <th scope="col">Nama Supir</th>
            <th scope="col">Alamat </th>
            <th scope="col">Telepon </th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
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
                <td> <a href="<?= base_url('admin/sopir/hapus_data'); ?>" class="btn btn-danger btn-sm"> Hapus

                        <a href="<?= base_url('admin/sopir/edit'); ?>" class="btn btn-primary btn-sm"> Edit
                </td>




            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<!--dikerjakan Angga>