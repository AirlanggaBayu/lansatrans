<table class="table table-striped">

    <thead>
    <tr>
        <a href="<?= base_url('admin/mobil/create_mobil') ?>"  class="btn btn-success btn-sm"><i class="bi bi-plus-circle""></i> <span>Tambah Data Mobil</span></a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <th scope="col">No </th>
            <th scope="col">Nama Mobil</th>
            <th scope="col">Warna Mobil</th>
            <th scope="col">Plat Nomor Mobil</th>
            <th scope="col">kapasitas Mobil</th>
            <th scope="col">Foto Mobil</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($mobil as $tr) : ?>

              <tr>
                <td><?php echo $no++ ?></td>
                <td><?= $tr->merk ?></td>
                <td><?= $tr->warna ?></td>
                <td><?= $tr->plat ?></td>
                <td><?= $tr->kapasitas ?></td>
                <td>
                    <img src="<?= base_url('assets/img/') . $tr->foto_kendaraan ?>" width="70" height="70">
                </td>

                <td>
                  <a href="<?= base_url('admin/mobil/hapus_mobil/' . $tr->id_mobil) ?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a>
                  <a href="<?= base_url('admin/mobil/halaman_ubah_mobil/' . $tr->id_mobil) ?>" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-edit"></i></a>
                </td>
              <?php endforeach; ?>
              </tbody>
</table>
</div>
<!-- Halaman ini digunakan untuk menampilkan beberapa nama tutor dari bimbel New Ways to English Course  -->