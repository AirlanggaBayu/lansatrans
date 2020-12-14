<section class="isi container" style="margin-top: 100px;">
       <?php foreach ($pemesanan as $p) {?>
        <div class="card mb-3">
            <div class="card-header">
              <?= $p->kode_pesan?>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?= $p->nama_pelanggan?></h5>
              <p class="card-text"><?= $p->tgl_pesan?></p>
              <a href="<?=base_url('pelanggan/histori/detail_histori/'.$p->id_pemesanan) ?>" type="button" class="btn btn-outline-primary">Detail</a>
            </div>
          </div>
          <?php } ?>
    </section>