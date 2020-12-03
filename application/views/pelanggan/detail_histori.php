<section class="isi container" style="margin-top: 100px;">
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title"><?= $joinan[0]->id_pemesanan?></h5>
              <div class="row mb-2">
                <div class="col-lg-6">
                    <label for=""><strong>Nama Pemesan</strong></label>
                    <p class="card-text"><?= $joinan[0]->nama_pelanggan?></p>
                </div>
                <div class="col-lg-6">
                    <label for=""><strong>Nomor HP</strong></label>
                    <p class="card-text"><?= $joinan[0]->telp?></p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-lg-6">
                    <label for=""><strong>Kelas Travel</strong></label>
                    <p class="card-text"><?= $joinan[0]->kelas?></p>
                </div>
                <div class="col-lg-6">
                    <p class="card-text" style="margin-top: 33px;"><?= $joinan[0]->harga?></p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-lg-6">
                    <label for=""><strong>Dari Kota</strong></label>
                    <p class="card-text">Jember</p>
                </div>
                <div class="col-lg-6">
                    <label for=""><strong>Ke Kota</strong></label>
                    <p class="card-text">Denpasar</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-lg-6">
                    <label for=""><strong>Tanggal Pemesanan</strong></label>
                    <p class="card-text"><?= $joinan[0]->tgl_pesan?></p>
                </div>
                <div class="col-lg-6">
                    <label for=""><strong>Tanggal Keberangkatan</strong></label>
                    <p class="card-text"><?= $joinan[0]->tgl_berangkat?></p>
                </div>
              </div>
                <label for=""><strong>Alamat</strong></label>
                <p class="card-text"><?= $joinan[0]->alamat_jemput?></p>
                <label for=""><strong>Status Pembayaran</strong></label>
                <p class="card-text text-danger"><?= $joinan[0]->status_bayar?></p>
            </div>
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#unggah">Unggah Bukti Pembayaran</button>
          </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="unggah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h6>Unggah Bukti Pembayaran</h6>
      <form action="">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
      </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Unggah</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

</script>