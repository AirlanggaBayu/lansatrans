<section class="isi container" style="margin-top: 100px;">
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row ml-4 mt-3">
      <div class="alert alert-success alert-dismissible fade show" role="alert">Terima kasih, pembayaran anda segera <?= $this->session->flashdata('flash'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="col-md-6">
      </div>
    </div>
  <?php endif; ?>
  <?php foreach ($pemesanan as $p) { ?>
    <div class="card mb-3">
      <div class="card-header">
        <?= $p->kode_pesan ?>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?= $p->nama_pelanggan ?></h5>
        <p class="card-text"><?= $p->tgl_pesan ?></p>
        <a href="<?= base_url('pelanggan/histori/detail_histori/' . $p->id_pemesanan) ?>" type="button" class="btn btn-outline-primary">Detail</a>
      </div>
    </div>
  <?php } ?>
</section>